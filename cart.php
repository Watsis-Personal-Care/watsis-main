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
        <div class="cart_caption">
            <h2 class="my_shopping_bag">My Shopping Bag</h2>
        </div>
        <table class="cart_table">
            <tr>
                <th colspan="2">PRODUCT</th>
                <th>PRICE</th>
                <th>QUANTITY</th>
                <th>TOTAL</th>
            </tr>
            <div class="product1">
                <tr>
                    <td>
                        <a class="remove_icon" href="#">
                            <img src="images/dustbin.png" alt="Remove">
                        </a>
                    </td>

                    <td>
                        <div class="product_info">
                            <img src="images/hairoil1.png" alt="Hair Oil">
                            <p>Shiseido Macherie Hair Oil 60ml</p>
                        </div>
                    </td>

                    <td>
                        <span>RM</span>
                        <span class="product_price">69.00</span>
                    </td>

                    <td>
                            <?php include('templates/qtybutton.php'); ?>
                    </td>

                    <td>
                        <span>RM</span>
                        <span class="total">69.00</span>
                    </td>
                </tr>
            </div>
        </table>
    </section>

    <!--Related product-->

    <!--Footer-->
</body>
</html>