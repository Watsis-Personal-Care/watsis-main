<!DOCTYPE html>
<html>
    <head>
        <title>Watsis Personal Care</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
    <?php include('templates/header.php') ?>
        <div class="hompage-product">
            <p class="popular-product">Popular Products</p>
            <div class="homepage-scroll-container">
            <?php include('server/get_featured_products.php');
            while($row = $featured_products->fetch_assoc()) { ?>
                <a href="itemDetails.php?product_id=<?php echo $row['product_id']; ?>">
                    <div class="image-container">
                        <img src="<?php echo $row['product_image1']; ?>" alt="">
                        <div class="overlay-homepage-img">
                            <h5><?php echo $row['product_name']; ?></h5>
                        </div>
                    </div>
                </a>
                <?php } ?>
            </div>
        </div>
    <div class="homepage-discovermore">
        <a href="itemList.php">Discover More</a>
    </div>

        <?php include('templates\footer.php') ?>
    </body>
</html>
