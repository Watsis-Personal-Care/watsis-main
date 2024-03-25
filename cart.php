<?php
session_start();

if(isset($_POST['addcart'])){

    //if user has added product to cart before
    if(isset($_SESSION['cart'])){
        //get all product id that have been added to cart
        $products_array_ids = array_column($_SESSION['cart'], "product_id");
        //if product that user want to add to cart has not been added to cart before
        if(!in_array($_POST['product_id'], $products_array_ids)){

            $product_id = $_POST['product_id'];

            $product_array = array(
                'product_id' => $_POST['product_id'],
                'product_name' =>$_POST['product_name'],
                'product_price' => $_POST['product_price'],
                'product_image' => $_POST['product_image'],
                'product_qty' => $_POST['product_qty']
            );

            $_SESSION['cart'][$product_id] = $product_array;

        //if product has been added to cart before
        }else{
            echo '<script> alert("Product was added to cart before!"); </script>';
        }

    }else{

        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_qty = $_POST['product_qty'];

        $product_array = array(
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_image' => $product_image,
            'product_qty' => $product_qty
        );

        $_SESSION['cart'][$product_id] = $product_array;

    }

}else{
    header('location: index.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/34fcbc38f7.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</head>
<body>
    <!--Nav Bar-->
    <?php include('templates/header.php')?>
    <!--Cart-->
    <section class="cart">
        <div class="heading">
            <h2 class="my_shopping_bag">My Shopping Bag</h2>
        </div>

        <div class="box_container">
            <div class="prod_box">
            <?php foreach($_SESSION['cart'] as $key => $value){ ?>
                <div class="cart_prod">
                    <div class="remove_icon">
                        <a href="#"><i class="fa-regular fa-trash-can"></i></a>
                    </div>

                    <div class="prod_img">
                        <img src="<?php echo $value['product_image'];?>" />
                    </div>

                    <div class="prod_info">
                        <div class="prod_name">
                            <h4><?php echo $value['product_name'];?></h4>
                        </div>
                        <div class="prod_price">
                            <span>RM</span>
                            <span class="prod_price"><?php echo $value['product_price'];?></span>
                        </div>
                        <div class="prod_quantity">
                            <button type="button" onclick="decrement(<?php echo $value['product_id'];?>)">-</button>
                            <input type="text" name="product_qty_<?php echo $value['product_id'];?>" id="quantity_<?php echo $value['product_id'];?>" value="<?php echo $value['product_qty'];?>" min="1">
                            <button type="button" onclick="increment(<?php echo $value['product_id'];?>)">+</button>
                        </div>
                    </div>

                    <div class="prod_total">
                        <h5>Total</h5>
                        <span>RM</span>
                        <span class="prod_price">69.00</span>
                    </div>
                </div>
            <?php } ?>
            </div>
            
            <div class="checkout_box">
                <div class="order_summary">
                    <h3>Order Summary</h3>
                    <div class="order_summary_row">
                        <span id="title">Subtotal</span>
                        <span id="amount">RM <span>260.95</span></span><br>
                    </div>
                    <div class="order_summary_row">
                        <span id="title">Delivery</span>
                        <span id="amount">RM <span>4.90</span></span>
                    </div>
                </div>
                <hr>
                <div class="total">
                    <span id="title">Total</span>
                    <span id="amount">RM <span>265.85</span></span>
                </div>
                

                <div class="promo_code">
                    <h3>Promo Code</h3>
                    <input type="text" id="code" name="code" placeholder="Enter your code here"><br><br>
                    <button>Apply</button>
                </div>
                <br>
                <div class="checkout_button">
                    <button>Checkout</button>
                </div>
            </div>
        </div>

    </section>

    <!--Related product-->

    <!--Footer-->
    <?php include('templates/footer.php')?>
</body>
</html>
