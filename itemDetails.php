<?php

	include('server/connection.php');

	if (isset($_GET['product_id'])){

		$product_id= $_GET['product_id'];

		$stmt= $conn->prepare("SELECT * FROM products WHERE product_id= ?");
		$stmt->bind_param("i",$product_id);

		$stmt->execute();

		$product= $stmt->get_result();


		//no product id was given
	}else{
		header('location: index.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Item Details</title>
    <link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/34fcbc38f7.js" crossorigin="anonymous"></script>
	<script src="script.js"></script>
</head>
<body>
    <!--Nav Bar-->
    <?php include('templates/header.php')?>

   <!--Item Details-->
    <section id="prodetails" class="section-p1">
		<?php while($row = $product->fetch_assoc()){ ?>

		
			<div class="single-pro-image">
				<img src="<?php echo $row['product_image1']; ?>" width="100%" id="MainImg" alt="">
				<div class="small-img-group">
					<div class="small-img-col">
						<img src="<?php echo $row['product_image1']; ?>" width="100%" class="small-img" alt="">
					</div>
					<div class="small-img-col">
						<img src="<?php echo $row['product_image2']; ?>" width="100%" class="small-img" alt="">
					</div>
					<div class="small-img-col">
						<img src="<?php echo $row['product_image3']; ?>" width="100%" class="small-img" alt="">
					</div>
					<div class="small-img-col">
						<img src="<?php echo $row['product_image4']; ?>" width="100%" class="small-img" alt="">
					</div>
				</div>
			</div>
        

        <div class= "single-pro-details">
            <h6>Home/ <?php echo $row['product_type']; ?></h6>
            <h4><?php echo $row['product_name']; ?></h4>
            <h2>RM<?php echo $row['product_price']; ?></h2>
			
			<form method="POST" action="cart.php">
				<input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>"/>
				<input type="hidden" name="product_image" value="<?php echo $row['product_image1']; ?>"/>
				<input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>"/>
				<input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>"/>
				<div class="prod_quantity">
					<button type="button" onclick="decrement(<?php echo $row['product_id']; ?>)">-</button>
					<input type="text" name='product_qty' id="quantity_<?php echo $row['product_id']; ?>" value="1" min="1">
					<button type="button" onclick="increment(<?php echo $row['product_id']; ?>)">+</button>
				</div>
            	<button class="addcart" type="submit" name="addcart">Add to Cart</button>
			</form>
            <h4>Product Details</h4>
            <span><?php echo $row['product_description']; ?> </span>

        </div>
		<?php } ?>
    </section>

	<!--Related products-->
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
    <?php include('templates/footer.php')?>

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
