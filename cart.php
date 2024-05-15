<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include '../../CodeFiles/config/cdn.php';

    ?>
    <link rel="stylesheet" href="../../Assets/style/style.css">
    <link rel="stylesheet" href="../../Assets/style/mediaQueries.css">
    <title>Cart</title>
</head>
<body>
    
<?php
include '../../CodeFiles/config/header.php';
?>
<div class="black_box"></div>
<main class="cart_block--content">
    <div class="cart_block">
        <!-- <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <tr>
                <td class="title">
                    <img src="" alt="" width="100px" height="100px">
                </td>
                <td class="quantity">
                    * QUANTITY *
                </td>
                <td class="price">
                    * PRICE *
                </td>
            </tr>
        </table> -->

        <div class="cart_is_notAvail">
            <h2 class="cartIsNotAvail">Cart Is Not Available</h2><p class="note_cart">Buy Product with Buy Button on Product Page.</p>
            <a href="../../CodeFiles/templates/index.php"><button class="continue_shopping">Continue Shopping</button></a>
        </div>

    </div>
</main>

<?php
include '../../CodeFiles/config/footer.php';
?>
</body>
</html>