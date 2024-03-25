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
            echo '<script> alert("Product was added to cart before!") </script>';
        }
        // if user first time add to cart
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

    //calculate total
    calculateTotalCart();

}else if(isset($_POST['remove_product'])){

    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);

    //calculate total
    calculateTotalCart();

}else if(isset($_POST['update_qty'])){

    //get id and quantity from the form
    $product_id = $_POST['product_id'];
    $product_qty = $_POST['product_qty'];

    //get product array from the session
    $product_array = $_SESSION['cart'][$product_id];

    //update product quantity
    $product_array['product_quantity'] = $product_qty;

    //return array back to the session
    $_SESSION['cart'][$product_id] = $product_array;

    //calculate total
    calculateTotalCart();

}else{
    //header('location: index.php');
}

function calculateTotalCart(){

    $total=0;

    foreach($_SESSION['cart'] as $key => $value){
        $product=$_SESSION['cart'][$key];
        $price=$product['product_price'];
        $quantity=$product['product_qty'];
        $total+=$price*$quantity;
    }

    $_SESSION['total']=$total;
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
                <div class="cart_prod">

                    <?php foreach($_SESSION['cart'] as $key => $value){ ?>
                    
                    <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>"/>
                        <div class="remove_icon">
                            <a href="#" type="submit" name="remove_product"><i class="fa-regular fa-trash-can"></i></a>
                        </div>
                    </form>

                    <div class="prod_img">
                        <img src="<?php echo $value['product_image'];?>" alt="Hair Oil">
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
                            <form method="POST" action="cart.php">
                                <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>"/>
                                <button onclick="decrement()" type="button" name="update_qty">-</button>
                                <input type="text" name="product_qty" id="quantity" value="<?php echo $value['product_qty'];?>" min="1">
                                <button onclick="increment()" type="button" name="update_qty">+</button>
                            </form>
                        </div>
                    </div>
                    <?php }?>

                    <div class="prod_total">
                        <h5>Total</h5>
                        <span>RM</span>
                        <span class="prod_price"><?php echo $value['product_qty']*$value['product_price']?></span>
                    </div>
                </div>
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
                    <span id="amount">RM <span><?php $_SESSION['total'];?></span></span>
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
    <script src="script.js"></script>
</body>
</html>
