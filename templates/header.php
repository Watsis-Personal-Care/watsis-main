<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <!-- Top navigation -->
    <header class="topnav">
      <!-- Centered link -->
      <div class="topnav-centered">
        <a href="index.php"><img src="images/watsis_personal_care.png" class="logo"></a>
      </div>
      
      <!-- Left-aligned links (default) -->
      <!-- Use any element to open the sidenav -->
      <span onclick="openNav()">
        <div class="barscontainer" onclick="myFunction(this)">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      </span>
      
      <!-- Right-aligned links -->
      <div class="topnav-right">
        <a href="">Contact Us</a>
        <a href="">Sign In</a>
        <a href="wishlist.php">wishlist</a>
        <a href="cart.php">cart</a>
      </div>
    </header>

    <!--Side navigation menu content-->
    <div class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <p style="text-decoration:underline">Categories: </p>
      <a href="itemList.php#BodyCare">Body Care</a>
      <a href="itemList.php#DentalCare">Dental Care</a>
      <a href="itemList.php#HairCare">Hair Care</a>
      <a href="itemList.php#SkinCare">Skin Care</a>
      <a href="">Promotion</a>
    </div>
  </body>
</html>
