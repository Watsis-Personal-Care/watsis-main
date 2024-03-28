<?php

session_start();

// Check if "Back" button is clicked
if(isset($_POST['backBtn'])){
    header("Location: delivery.php");
    exit; // Ensure script stops executing after redirection
}


// Define variable and corresponding error variable with empty value
$cardnameErr = $cardnumberErr = $expmonthErr = $expyearErr = $cvvErr = "";
$cardname = $cardnumber = $expmonth = $expyear = $cvv = "";
$showPopup = false;

if($_SERVER['REQUEST_METHOD']==='POST'){

    //Validate card name
    if(empty($_POST['cardname'])){
        $cardnameErr = "Please enter your card name.";
    }else{
        $cardname = test_input($_POST['cardname']);
        //Validate card name only consists of alphabet and whitespace
        if(!preg_match("/^[a-zA-Z ]*$/", $cardname)){
            $cardnameErr = "Please enter only alphabet and whitespace.";
        }
    }

    //Validate card number
    if(empty($_POST['cardnumber'])){
        $cardnumberErr = "Please enter your card number.";
    }else{
        $cardnumber = test_input($_POST['cardnumber']);
        $cardnumber = str_replace([' ', '-', '(', ')', '+'], '', $cardnumber);
        //Validate card number consists of 16 digit
        if(!preg_match("/^[0-9]{16}$/", $cardnumber)){
            $cardnumberErr = "Please enter 16-digits card number.";
        }
    }


    //Validate expiry month
    if(empty($_POST['expmonth'])){
        $expmonthErr = "Please enter your card expiring month.";
    }else{
        $expmonth = test_input($_POST['expmonth']);
        //Validate month entered is between 1 to 12
        if(!preg_match("/^(0?[1-9]|1[0-2])$/", $expmonth)){
            $expmonthErr = "Please enter valid expiring month.";
        }
    }

    //Validate expiry year
    if(empty($_POST['expyear'])){
        $expyearErr = "Please enter your card expiring year.";
    }else{
        $expyear = test_input($_POST['expyear']);
        // Validate year entered is a four-digit number
        if(!preg_match("/^\d{4}$/", $expyear)) {
            $expyearErr = "Please enter a valid four-digit year.";
        } else {
            // Validate year entered is more than the current year
            $currentYear = date('Y');
            if ($expyear <= $currentYear) {
                $expyearErr = "Please enter a year in the future.";
            }
        }
    }

    //Validate CVV
    if(empty($_POST['cvv'])){
        $cvvErr = "Please enter your CVV.";
    }else{
        $cvv = test_input($_POST['cvv']);
        // Validate CVV consists only of 3 or 4 digits
        if(!preg_match("/^\d{3,4}$/", $cvv)) {
            $cvvErr = "Please enter a valid CVV consisting of 3 or 4 digits.";
        }
    }

    //Show payment successful when no more error in input
    if(empty($cardnameErr)&&empty($cardnumberErr)&&empty($expmonthErr)&&empty($expyearErr)&&empty($cvvErr)){
        $showPopup = true;
    }
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data); //remove whitespace before and after the name
    $data = stripslashes($data); 
    $data = htmlspecialchars($data);
    return $data;
  }


// If payment is successful, unset session variables
if(isset($_POST['payBtn']) && !$showPopup){
    unset($_SESSION['delivery_data']);
    unset($_SESSION['cart']);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/34fcbc38f7.js" crossorigin="anonymous"></script>
    <title>Checkout</title>
</head>
<body>
    <!--Navbar-->
    <?php include("templates/header.php")?>
    <!--Payment-->
    <div class="payment">
        <div class="checkout-form-container">
            <div class="checkout-form-title">
                <h2 id="delivery"><i class="fa-regular fa-circle-check"></i>Delivery</h2>
                <h2 id="payment">Payment</h2>
            </div>
            <hr>
            
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="payment-form">
                <div class="corow">
                    <div class="col-50">
                        <h3>Payment</h3>

                        <label for="accepted_cards">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <div class = "cardname">
                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname" placeholder="John More Doe" value="<?php echo htmlspecialchars($cardname); ?>">
                            <p class="error"><?php echo $cardnameErr; ?></p>
                        </div>
                        <div class = "cardnumber">
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" value="<?php echo htmlspecialchars($cardnumber); ?>">
                            <p class="error"><?php echo $cardnumberErr; ?></p>
                        </div>
                        <div class = "expmonth">
                            <label for="expmonth">Expiring Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="09" value="<?php echo htmlspecialchars($expmonth); ?>">
                            <p class="error"><?php echo $expmonthErr; ?></p>
                        </div>
                        <div class="expyear">
                            <label for="expyear">Expiring Year</label>
                            <input type="text" id="expyear" name="expyear" placeholder="2028" value="<?php echo htmlspecialchars($expyear); ?>">
                            <p class="error"><?php echo $expyearErr; ?></p>
                        </div>
                        <div class="cvv">
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" name="cvv" placeholder="352" value="<?php echo htmlspecialchars($cvv); ?>">
                            <p class="error"><?php echo $cvvErr; ?></p>
                        </div>
                    </div>
                </div>
                <div class="payment-button">
                    <button type="submit" name="backBtn">Back</button>
                    <button type="submit" name="payBtn">Pay</button>
                </div>
                <div class="poptick" id="poptick" style="position:fixed">
                    <img src="images\tick.gif" width="50px">
                    <p>Payment received!<p>
                    <p>Your order will be shipped soon. Thank you!</p>
                    <button type="button" onclick="closePopup()">OK</button>
                </div>
            </form>
        </div>
    </div>
    <?php include("templates/footer.php")?>
    <script>
        let popup= document.getElementById("poptick");
        
        function closePopup(){
            popup.classList.remove("open-poptick");
            // Redirect to index.php
            window.location.href = "index.php";
        }

        // Check if the PHP variable $showPopup is true to open the popup
        <?php if ($showPopup): ?>
        popup.classList.add("open-poptick");
        <?php endif; ?>
        
    </script>
</body>
</html>