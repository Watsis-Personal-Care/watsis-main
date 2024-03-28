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
            
            <form action="" class="payment-form" method="POST">
                <div class="corow">
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

                        <div class="corow">
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
                <div class="payment-button">
                    <button type="submit" name="backBtn">Back</button>
                    <button type="button" name="payBtn" onclick="openPopup()">Pay</button>
                </div>
                <div class="poptick" id="poptick" style="position:fixed">
                    <img src="images\tick.gif" width="50px">
                    <p>Payment received!<p>
                    <p>Your order will be shipped soon. Thank you!</p>
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
</html>