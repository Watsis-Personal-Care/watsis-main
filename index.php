<!DOCTYPE html>
<html>
    <head>
        <title>Watsis Personal Care</title>
        <script src="https://kit.fontawesome.com/34fcbc38f7.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <?php include('templates/header.php') ?>
        <div class="homepage">
            <img src="images/homepage_pic.png" alt="homepage_pic" width="100%">
            <div class="promote-prods" style="margin-top: 50px">
                <div class="promote-prod">
                    <a href=""><img src="images/promote_prod1" alt="promote_prod1"></a>
                    <div class="promote-prod-desc">
                        <p style="text-align: justify">
                            "Is your hair feeling flat and lifeless? Does it lack volume? 
                            You're not alone. 
                            But there is a solution. Introducing Grafen Root Booster Shampoo, 
                            the special edition formula that will transform your hair."
                        </p>
                        
                        <p style="text-align:right">
                            <i class="fa-solid fa-minus"></i>Grafen Root Booster Shampoo
                        </p>
                    </div>
                    
                </div>
                <div class="promote-prod">
                    <div class="promote-prod-desc">
                        <p style="text-align: justify">
                            "Indulge in the transformative power of The Ritual of Sakura body oil. 
                            Enriched with cherry blossom extract and rice milk, 
                            this luxurious oil hydrates, nourishes and leaves your 
                            skin feeling irresistibly soft and smooth."
                        </p>
                        <p style="text-align:right">
                            <i class="fa-solid fa-minus"></i>The Ritual Of Sakura Body oil
                        </p>
                        </div>
                    
                    <a href=""><img src="images/promote_prod2" alt="promote_prod2"></a>
                    
                </div>
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
                <p class="Featured-product" style="margin-left: 20px">Featured Product</p>
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
        </div>
        <?php include('templates/footer.php') ?>
    </body>
</html>
