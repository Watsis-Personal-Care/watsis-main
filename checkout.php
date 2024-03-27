<!--checkout form -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Check Out Form</title>
    <style>
        .Checkout{
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .checkout-form-container{
            background-color: #fcf4ec;
            width: 70%;
            margin-top: 25rem;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            align-items: flex-start;
            flex-direction: column;
        }

        .checkout-from-title{
            font-size: 36px;
            margin-bottom: 2.5rem;
            margin-left: 5rem;
            font-weight: 500;
            opacity: 0.8;
        }

        .checkout-form{
            display: flex;
            margin-left: 5rem;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            width: 80%;
        }

        .row{
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            margin-bottom: 2rem;
            width: 100%;
        }

        .col-25 {
            -ms-flex: 25%; /* IE10 */
            flex: 25%;
        }
        
        .col-50 {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
        }

        label{
            font-size: 16px;
            color: grey;
            margin-bottom: 0.5rem;
        }

        input[type="text"]{
            width: 100%;
            height: 40px;
            padding: 0 10px;
            background-color: #f2f2f2;
            border-radius: 5px;
            border: none;
            font-size: 18px;
        }

        input[type="text"]::placeholder{
            font-size: 14px;
            color: #b9b9b9;
        }

        .input-container{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .input-container .input-line{
            width: 48%;
        }

        .btn{
            background-color: rgb(0, 132, 255);
            margin:0 auto;
            color: white;
            font-weight: 500;
            font-size: 18px;
            height: 50px;
            padding: 0 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;

        }

        .btn:hover{
            background-color: rgb(4, 88, 167);
        }

        .poptick{
            width: 300px;
            background: #fff;
            border-radius: 6px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%) scale(0.1);
            text-align: center;
            padding: 0 30px 30px;
            color: #333;
            visibility: hidden;
            transition: transform 0.4s, top 0.4s;
            z-index: 99;
        }

        .open-poptick{
            visibility: visible;
            top: 50%;
            transform: translate(-50%,-50%) scale(1);
        }
    </style>
</head>
<body>
    <?php include("templates/header.php")?>
    <div class="Checkout">
        <div class="checkout-form-container">
            <h2 class="checkout-from-title">Check Out Details</h2>
            <form action="" class="checkout-form">
                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="john@example.com">
                        <label for="phone"><i class="fa fa-phone"></i>Phone Number</label>
                        <input type="text" id="phone" name="phone" placeholder="+6012-3456789" >
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="Putrajaya">
                        <div class="row">
                            <div class="col-50">
                            <label for="state">State</label>
                            <input type="text" id="state" name="state" placeholder="NY">
                            </div>
                        </div>
                    </div>
                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                        <label for="expmonth">Expiring Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September">

                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Expiring Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2018">
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352">
                            </div>
                        </div>
                    </div>  
                </div>
            <button type="button"  class="btn" onclick="openPopup()" >Submit</button>
            <div class="poptick" id="poptick">
                <img src="tick.png" width="50px">
                <h4>Thank You!<h4>
                <p>Details have been succesfully uploaded. Thanks!</p>
                <button type="submit" onclick="closePopup()">OK</button>
            </div>
            </form>
        </div>
    </div>
    <?php include("templates/footer.php")?>
    <script>
        let popup= document.getElementById("poptick");
        
        function openPopup(){
            popup.classList.add("open-poptick");
        }
        function closePopup(){
            popup.classList.remove("open-poptick");
        }
    </script>
</body>