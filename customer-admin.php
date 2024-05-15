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
<h2 class="working">Customers</h2>
</div>

<div class="search_bar">
    <form action="#">
        <input type="text" name="product_searchBar" id="product_sb" placeholder="Search Customers">
        <input type="submit" value="Search" name="product_searchBtn">
    </form>
</div>

<div class="product--table-elem">
<table class="order--list">
    <tr>
        <th class="span_widt">Customer Name</th>
        <th>Customer Number</th>
        <th>Customer Email</th>
        <th>Customer Address</th>
        <th>Customer City</th>
        <th>Customer State</th>
    </tr>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
$query = "SELECT * FROM `users_orders` ORDER BY userID DESC LIMIT 9;";
$finCon = mysqli_query($conn, $query);

while($tab_product = mysqli_fetch_assoc($finCon)){
?>
    <tr>
        <td><?php echo $tab_product['userFirstName'] . $tab_product['userLastName']; ?></td>
        <td><?php echo $tab_product['userMobileNumber']; ?></td>
        <td><?php echo $tab_product['userEmail']; ?></td>
        <td><?php echo $tab_product['userAddress']; ?></td>
        <td><?php echo $tab_product['userCity']; ?></td>
        <td><?php echo $tab_product['userState']; ?></td>
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