<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/style/admin.css">
    <?php
    include '../../Codefiles/config/cdn.php';
    ?>
    <title>Product</title>

<style>

input[name="accept_mail"]{
    cursor: pointer !important;
    font-size: 16px;}

td.response form input{
    width: 100%;
    border: none;}

td.response{
    display: flex;
    align-items: center;
    justify-content: center;}

div.right--aside{
    overflow-y: hidden;}

</style>

</head>
<body>
    
<main id="main__content">

<div class="main__headElems">
<h2 class="working">Orders</h2>
</div>

<div class="search_bar">
    <form action="#">
        <input type="text" name="product_searchBar" id="product_sb" placeholder="Search Order">
        <input type="submit" value="Search" name="product_searchBtn">
    </form>
</div>

<div class="product--table-elem">
<table class="order--list">
    <tr>
        <th class="span_widt">Order Id</th>
        <th>Customer Name</th>
        <th>Customer Info</th>
        <th>Product ID</th>
        <th>Response</th>
    </tr>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
$query = "SELECT * FROM `users_orders` ORDER BY userID DESC LIMIT 3;";
$finCon = mysqli_query($conn, $query);

while($tab_product = mysqli_fetch_assoc($finCon)){
?>
    <tr>
        <td><?php echo $tab_product['orderID']; ?></td>
        <td><?php echo $tab_product['userFirstName'] . $tab_product['userLastName']; ?></td>
        <td><?php echo $tab_product['userMobileNumber']. ' || ' . $tab_product['userEmail']; ?></td>
        <td><?php echo $tab_product['productID']; ?></td>
        <td class="response">
            <abbr title="Accept & Send Confirmation Mail">
                <form action="../../CodeFiles/admin/accept.php" method="POST">
                    <input type="hidden" name="accept_mail" value="<?php echo $tab_product['userEmail']; ?>">
                    <input type="hidden" name="accept_name" value="<?php echo $tab_product['userFirstName']; ?>">
                    <input type="hidden" name="accept_orderID" value="<?php echo $tab_product['orderID']; ?>">
                    <input type="hidden" name="accept_productID" value="<?php echo $tab_product['productID']; ?>">
                    <input type="submit" value="✔️" name="accept_mail">
                </form>
            </abbr>
            <abbr title="Cancle Order">
            <form action="../../CodeFiles/admin/reject.php" method="POST">
                    <input type="hidden" name="accept_mail" value="<?php echo $tab_product['userEmail']; ?>">
                    <input type="hidden" name="accept_name" value="<?php echo $tab_product['userFirstName']; ?>">
                    <input type="hidden" name="accept_orderID" value="<?php echo $tab_product['orderID']; ?>">
                    <input type="hidden" name="accept_productID" value="<?php echo $tab_product['productID']; ?>">
                    <input type="submit" value="✖️" name="accept_mail">
                </form>
            </abbr>
        </td>
    </tr>
<?php
}
?>
</table>
<!-- <div class="product--pagination">
<button class="paginate" onclick="pagination_pushState(1)">1</button>
<button class="paginate" onclick="pagination_pushState(2)">2</button>
<button class="paginate" onclick="pagination_pushState(3)">3</button>
<button class="paginate" onclick="pagination_pushState(4)">4</button>
<button class="paginate" onclick="pagination_pushState(5)">5</button>
</div> -->
</div>

</main>
<script src="../../Assets/script/admin-script.js"></script>
</body>
</html>