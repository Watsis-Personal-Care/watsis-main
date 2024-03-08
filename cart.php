<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Nav Bar-->

    <!--Cart-->
    <section class="cart">
        <div class="heading">
            <h2 class="my_shopping_bag">My Shopping Bag</h2>
        </div>

        <div class="box_container">
            <div class="prod_box">
                <div class="cart_prod">
                    <div class="remove_icon">
                        <a href="#">
                            <img src="images/dustbin.png" alt="Remove">
                        </a>
                    </div>

                    <div class="prod_img">
                        <img src="images/hairoil1.png" alt="Hair Oil">
                    </div>

                    <div class="prod_info">
                        <div class="prod_name">
                            <h4>Shiseido Macherie Hair Oil 60ml</h4>
                        </div>
                        <div class="prod_price">
                            <span>RM</span>
                            <span class="prod_price">69.00</span>
                        </div>
                        <div class="prod_quantity">
                            <?php include('templates/qtybutton.php'); ?>
                        </div>
                    </div>

                    <div class="prod_total">
                        <h5>Total</h5>
                        <span>RM</span>
                        <span class="prod_price">69.00</span>
                    </div>
                </div>

                <div class="cart_prod">
                    <div class="remove_icon">
                        <a href="#">
                            <img src="images/dustbin.png" alt="Remove">
                        </a>
                    </div>

                    <div class="prod_img">
                        <img src="images/bodycream1.png" alt="Body Cream">
                    </div>

                    <div class="prod_info">
                        <div class="prod_name">
                            <h4>CLOUD MILK Coconut + Maca Firming Body Cream</h4>
                        </div>
                        <div class="prod_price">
                            <span>RM</span>
                            <span class="prod_price">191.95</span>
                        </div>
                        <div class="prod_quantity">
                            <?php include('templates/qtybutton.php'); ?>
                        </div>
                    </div>

                    <div class="prod_total">
                        <h5>Total</h5>
                        <span>RM</span>
                        <span class="prod_price">191.95</span>
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
</body>
</html>