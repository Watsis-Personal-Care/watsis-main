<?php

	include('server/connection.php');

	$stmt= $conn->prepare("SELECT * FROM products");

	$stmt->execute();

	$products= $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Item</title>
    <link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/34fcbc38f7.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--Nav Bar-->
    <?php include('templates/header.php')?>
    <!--Item List-->
	<section id="product1" class="section-p1">
		<h2>Products</h2>
		<div class="pro-container">

			<?php while($row= $products->fetch_assoc()){ ?>

				<div class ="pro" onclick="window.location.href='itemDetails.php?product_id=<?php echo $row['product_id']; ?>'">
					<img src="<?php echo $row['product_image1']; ?>" alt="">
					<div class= "des">
						<span>Watsis</span>
						<h5><?php echo $row['product_name']; ?></h5>
						<div class="star">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<h4>RM<?php echo $row['product_price']; ?></h4>
					</div>
					<a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
				</div>
			<?php } ?>		
		</div>
	</section>
	
	<!-- Promotion -->
	<section id="banner" class="section-m1">
		<h4>Promotion</h4>
		<h2>Up to <span>90% Off<span>-All categories</h2>
		<button>Explore more</button>
	</section>

	<!--Featured Products-->
	<section id="product1" class="section-p1">
		<h2>Featured Products</h2>
		<div class="pro-container">
			<?php include('server/get_featured_products.php'); ?>

			<?php while($row= $featured_products->fetch_assoc()){ ?>

				<div class ="pro" onclick="window.location.href='itemDetails.php?product_id=<?php echo $row['product_id']; ?>'">
					<img src="<?php echo $row['product_image1']; ?>" alt="">
					<div class= "des">
						<span>Watsis</span>
						<h5><?php echo $row['product_name']; ?></h5>
						<div class="star">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<h4>RM<?php echo $row['product_price']; ?></h4>
					</div>
					<a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
				</div>
			<?php } ?>
			
		</div>
	</section>

	<!--Footer-->
	<?php include('templates/footer.php')?>
</body>
</html>
