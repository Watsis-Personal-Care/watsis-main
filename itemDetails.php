<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Item Details</title>
    <link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/34fcbc38f7.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--Nav Bar-->

   <!--Item Details-->
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="images/bodywash1.png" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/bodywash1.png" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/bodywash2.png" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/bodywash3.png" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/bodywash4.png" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class= "single-pro-details">
            <h6>Home/ Body Care</h6>
            <h4>Jo Malone Lime Basil & Mandarin Body & Hand Wash</h4>
            <h2>RM385.00</h2>
            <div class="prod_quantity"> 
                <?php include('templates/qtybutton.php'); ?>
            </div>
            <button class="addcart">Add to Cart</button>
            <h4>Product Details</h4>
            <span>Elevate your daily routine with indulgent Lime Basil & Mandarin Body & Hand Wash. 
            With naturally derived glycerine and meadowfoam seed oil, the formula transforms into a velvety foam, 
            and cleanses and softens skin. Leave skin scented with this tantalising, zesty fragrance. </span>

        </div>
    </section>

    <section id="product1" class="section-p1">
		<h2>Featured Products</h2>
		<p>Personal Care</p>
		<div class="pro-container">
			<div class ="pro">
				<img src="images/bodywash1.png" alt="">
				<div class= "des">
					<span>Watsis</span>
					<h5>Jo Malone Lime Basil & Mandarin Body & Hand Wash</h5>
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>RM385.00</h4>
				</div>
				<a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
			</div>
			<div class ="pro">
				<img src="images/soap1.png" alt="">
				<div class= "des">
					<span>Watsis</span>
					<h5>Chanel N°5 The Bath Soap</h5>
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>RM135.00</h4>
				</div>
				<a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
			</div>
			<div class ="pro">
				<img src="images/bodyoil1.png" alt="">
				<div class= "des">
					<span>Watsis</span>
					<h5>The Ritual Of Sakura Body oil</h5>
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>RM125.00</h4>
				</div>
				<a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
			</div>
			<div class ="pro">
				<img src="images/bodycream1.png" alt="">
				<div class= "des">
					<span>Watsis</span>
					<h5>CLOUD MILK Coconut + Maca Firming Body Cream</h5>
					<div class="star">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<h4>RM191.95</h4>
				</div>
				<a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
			</div>

		</div>
	</section>

    <!--Footer-->

    <script>
        var MainImg= document.getElementById("MainImg");
        var smallimg= document.getElementsByClassName("small-img");

        smallimg[0].onclick= function(){
            MainImg.src= smallimg[0].src;
        }
        smallimg[1].onclick= function(){
            MainImg.src= smallimg[1].src;
        }
        smallimg[2].onclick= function(){
            MainImg.src= smallimg[2].src;
        }
        smallimg[3].onclick= function(){
            MainImg.src= smallimg[3].src;
        }
    
    </script> 

</body>
</html>
