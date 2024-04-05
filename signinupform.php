<?php
    session_start();
    include("server/connection.php");

    $signin_uname = $signin_psw = $email = $signup_uname = $signup_psw = $repeatPsw = '';
    $signin_unameErr = $signin_pswErr = $emailErr = $signup_unameErr = $signup_pswErr = $repeatPswErr = $checkUsernameErr = $checkUsernameErr2 = '';
    $showPopup = false;

    // Function to sanitize input data
    function test_input($data) {
        $data = trim($data); //remove whitespace before and after the name
        $data = stripslashes($data); 
        $data = htmlspecialchars($data);
        return $data;
    }

    // Validation and processing for login form
    if (isset($_POST['loginSubmit'])) {
        // Validate username
        if(empty($_POST['signin_uname'])){
            $signin_unameErr = "Please enter your name.";
        } else {
            $signin_uname = test_input($_POST['signin_uname']);
            // Validate username only consists of alphabet and whitespace
            if(!preg_match("/^[a-zA-Z ]*$/", $signin_uname)){
                $signin_unameErr = "Please enter only alphabet and whitespace.";
                $signin_uname = '';
            }
        }

        // Validate password for sign-in
        if (empty($_POST['signin_psw'])) {
            $signin_pswErr = 'Password is required for sign-in';
        }

        // If no validation errors, proceed with form submission
        if(empty($signin_unameErr) && empty($signin_pswErr)){
            $username = $_POST['signin_uname'];
            $password = $_POST['signin_psw'];

            $checkUsername = "SELECT user_id, user_username FROM users WHERE user_username = ? AND user_password = ?";
            $stmt = $conn->prepare($checkUsername);
            $stmt->bind_param("ss", $username, $password); // Bind username and password
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 0) {
                $checkUsernameErr = "Invalid username or password.";
            }
            else {
                // Fetch the user_id
                $row = $result->fetch_assoc();
                $user_id = $row['user_id'];
                
                // Store user_id in session
                $_SESSION['user_id'] = $user_id;
                
                // Redirect to index.php or any other page after successful login
                header("Location: index.php");
                exit();
            }
        }
    }


    // Validation and processing for signup form
    if (isset($_POST['signupSubmit'])) {
        // Validate email
        if(empty($_POST['email'])){
            $emailErr="Please enter your email.";
        } else {
            $email = test_input($_POST['email']);
            // Validate the email structure
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr="Please enter valid email format. E.g. john24@gmail.com";
                $email = '';
            }
        }

        // Validate username
        if(empty($_POST['signup_uname'])){
            $signup_unameErr = "Please enter your name.";
        } else {
            $signup_uname = test_input($_POST['signup_uname']);
            // Validate username only consists of alphabet and whitespace
            if(!preg_match("/^[a-zA-Z ]*$/", $signup_uname)){
                $signup_unameErr = "Please enter only alphabet and whitespace.";
                $signup_uname = '';
            }
        }

        // Validate password for sign-up
        if (empty($_POST['signup_psw'])) {
            $signup_pswErr = 'Password is required for sign-up';
        }

        // Validate repeated password
        if (empty($_POST['repeatPsw'])) {
            $repeatPswErr = 'Repeat Password is required for sign-up';
        } else if ($_POST['repeatPsw'] !== $_POST['signup_psw']) {
            $repeatPswErr = 'The repeated password does not match with the password above';
            $repeatPsw = '';
        }

        // If no validation errors, proceed with form submission
        if(empty($emailErr) && empty($signup_unameErr) && empty($signup_pswErr) && empty($repeatPswErr)){
            $email = $_POST['email'];
            $username = $_POST['signup_uname'];
            $password = $_POST['signup_psw'];

            $checkUsername = "SELECT user_username FROM users WHERE user_username = ?";
            $stmt = $conn->prepare($checkUsername);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $checkUsernameErr2 = "The username has been registered.";
            }
            else {
                $sql = "INSERT INTO users (user_email, user_username, user_password) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $email, $username, $password);
                $stmt->execute();
                echo "<script>alert('Registration successful! Please login to continue.');</script>";
                $signup_uname = $email = '';
            }
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <style>
        /* Style the sign in up tab */
        .sign-in-up-formbox {
            width: 380px;
            height: 500px;
            position: relative;
            margin: 6% auto;
            background: #fff;
            padding: 5px;
            overflow: hidden;
        }

        .sign-in-up-button-box {
            width: 220px;
            margin: 35px auto;
            position: relative;
            box-shadow: 0 0 20px 9px #ff61241f;
            border-radius: 30px;
        }

        .toggle-sign-in-up {
            padding: 10px 30px;
            cursor: pointer;
            background: transparent;
            border: 0;
            outline: none;
            position: relative;
        }

        #sign-in-up-btn {
            top: 0;
            left: 0;
            position: absolute;
            width: 110px;
            height: 100%; 
            background: linear-gradient(to right, #ff105f, #ffad06);
            border-radius: 30px;
            transition: 0.5s;
        }

        .input-sign-in-up {
            top: 180px;
            position: absolute;
            width: 280px;
            transition: 0.5s;
        }

        .input-sign-details {
            width: 100%;
            padding: 10px 0;
            margin: 5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            border-bottom: 1px solid #999;
            outline: none;
            background: transparent;
        }

        .sign-in-up-btn {
            width: 85%;
            padding: 10px 30px;
            cursor: pointer;
            display: block;
            margin: auto;
            border: 0;
            outline: none;
            border-radius: 30px;
        }

        #login {
            left: 50px;
        }

        #signup {
            left: 450px;
        }

        .error {
            color: red;
        }
        /* End of styling sign in up form*/
    </style>
</head>
<body>
    <?php include('templates/header.php') ?>
    <div class="hero">
        <div class="sign-in-up-formbox">
            <div class="sign-in-up-button-box">
                <div id="sign-in-up-btn"></div>
                <button type="button" class="toggle-sign-in-up" onclick="login()">Log In</button>
                <button type="button" class="toggle-sign-in-up" onclick="signup()">Sign up</button>
            </div>
            <form id="login" class="input-sign-in-up" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <span class="error"><?php echo $checkUsernameErr; ?></span>
                <input type="text" class="input-sign-details" placeholder="Username" name="signin_uname" value="<?= htmlspecialchars($signin_uname) ?>">
                <span class="error"><?php echo $signin_unameErr; ?></span>
                <input type="password" class="input-sign-details" placeholder="Password" name="signin_psw">
                <span class="error"><?php echo $signin_pswErr; ?></span>
                <button type="submit" class="sign-in-up-btn" name="loginSubmit">Log In</button>
            </form>
            <form id="signup" class="input-sign-in-up" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <span class="error"><?php echo $checkUsernameErr2; ?></span>
                <input type="text" class="input-sign-details" placeholder="Username" name="signup_uname" value="<?= htmlspecialchars($signup_uname) ?>">
                <span class="error"><?php echo $signup_unameErr; ?></span>
                <input type="text" class="input-sign-details" placeholder="Email" name="email" value="<?= htmlspecialchars($email) ?>">
                <span class="error"><?php echo $emailErr; ?></span>
                <input type="password" class="input-sign-details" placeholder="Password" name="signup_psw">
                <span class="error"><?php echo $signup_pswErr; ?></span>
                <input type="password" class="input-sign-details" placeholder="Repeat Password" name="repeatPsw">
                <span class="error"><?php echo $repeatPswErr; ?></span>
                <button type="submit" class="sign-in-up-btn" name="signupSubmit">Sign Up</button>
            </form>
        </div>
    </div>
    <?php include("templates/footer.php"); ?>
    <script>
        var x =document.getElementById("login");
        var y =document.getElementById("signup");
        var z =document.getElementById("sign-in-up-btn");

        function signup() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>
</html>