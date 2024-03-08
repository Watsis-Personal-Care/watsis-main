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
        <a href="index.html"><img src="watsis_personal_care.png" class="logo"></a>
      </div>
      
      <!-- Left-aligned links (default) -->
      <!-- Use any element to open the sidenav -->
      <span onclick="openNav()">
        <div class="container" onclick="myFunction(this)">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      </span>
      
      <!-- Right-aligned links -->
      <div class="topnav-right">
        <a href="">Contact Us</a>
        <a href="">Sign In</a>
        <a href="">wishlist</a>
        <a href="">cart</a>
      </div>
    </header>

    <!--Side navigation menu content-->
    <div class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="">Skin Care</a>
      <a href="">Hair Care</a>
      <a href="">Body Care</a>
      <a href="">Dental Care</a>
      <a href="">Promotion</a>
    </div>
  </body>
</html>