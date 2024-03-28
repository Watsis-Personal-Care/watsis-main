<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Checkout</title>
</head>
<body>
    <!--Navbar-->
    <?php include("templates/header.php")?>
    <!--Checkout-->
    <div class="checkout">
        <div class="checkout-form-container">
            <div class="checkout-form-title">
                <h2 id="delivery">Delivery</h2>
                <h2 id="payment">Payment</h2>
            </div>
            <hr>
            
            <form action="payment.php" class="checkout-form" method="POST">
                <div class="corow">
                    <div class="col-50">
                        <h3>Delivery Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="john@example.com">
                        <label for="phone"><i class="fa fa-phone"></i>Phone Number</label>
                        <input type="text" id="phone" name="phone" placeholder="+6012-3456789" >
                        <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="address" name="address" placeholder="88, Jalan Sungai Long">
                        <label for="city"><i class="fa fa-map-marker"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="Kajang">
                        <label for="state"><i class="fa fa-institution"></i> State</label>
                        <select id="state" name="state">
                            <option value="" disabled selected>Select state</option>
                            <option value="Johor">Johor</option>
                            <option value="Kedah">Kedah</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Melaka">Melaka</option>
                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Pulau Pinang">Pulau Pinang</option>
                            <option value="Perlis">Perlis</option>
                            <option value="Perak">Perak</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Sarawak">Sarawak</option>
                            <option value="Selangor">Selangor</option>
                            <option value="Terengganu">Terengganu</option>
                            <option value="Wilayah Persekutuan Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
                            <option value="Wilayah Persekutuan Labuan">Wilayah Persekutuan Labuan</option>
                            <option value="Wilayah Persekutuan Putrajaya">Wilayah Persekutuan Putrajaya</option>
                        </select><br>
                    </div>
                </div>
                <button type="submit" name="submitBtn">Submit</button>
            </form>
        </div>
    </div>
    <?php include("templates/footer.php")?>
</body>
</html>