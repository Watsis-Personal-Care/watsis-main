<!DOCTYPE html>
<html>
    <head>
        <title>Watsis Personal Care</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <?php include('templates/header.php') ?>
        <div class="homepage">
            <img src="images/homepage_pic.png" alt="homepage_pic" width="100%">
            <div class="promote-prod">
                <a href=""><img src="images/promote_prod1" alt="promote_prod1"></a>
                <a href=""><img src="images/promote_prod2" alt="promote_prod2"></a>
            </div>
            <div class="brief-aboutus">
                <div class="briefing">
                    <img src="images/mission_icon.png" alt="mission_icon">
                    <p>Making it an essential part of everyday life.</p>
                </div>
                <div class="briefing">
                    <img src="images/product_icon.png" alt="product_icon">
                    <p>Provides top-quality products</p>
                </div>
                <div class="briefing">
                    <img src="images/customer_satisfaction_icon.png" alt="customer_satisfaction_icon">
                    <p>Your satisfaction is our priority</p>
                </div>
            </div>
            <div class="hompage-product">
                <p class="popular-product">Featured Product</p>
                <div class="homepage-scroll-container">
                    <?php include('server/get_featured_products.php');
                    while($row = $featured_products->fetch_assoc()) { ?>
                        <a href="itemDetails.php?product_id=<?php echo $row['product_id']; ?>"><img src="<?php echo $row['product_image1']; ?>" alt=""></a>
                    <?php } ?>
                </div>
            </div>

            <div class="homepage-discovermore">
                <a href="itemList.php">Discover More</a>
            </div>
        </div>
        <?php include('templates/footer.php') ?>
    </body>
</html>
