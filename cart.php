<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="/webasgm/style.css">
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
            <tr>
                <td>
                    <a class="remove_icon" href="#">X</a>
                </td>

                <td>
                    <div class="product_info">
                        <img src="/webasgm/images/hairoil1.png" alt="Hair Oil">
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
        </table>
    </section>

    <!--Footer-->
</body>
</html>