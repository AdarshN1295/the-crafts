<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/style/admin.css">
    <title>Product</title>
</head>
<body>
    
<main id="main__content">

<div class="main__headElems">
<h2 class="working">Products</h2>
<div class="product_addBTN">
    <button id="product--add--button" class="addbtn" onclick="addProduct__innerText()">Add Product</button>
</div>
</div>

<div class="search_bar">
    <form action="#">
        <input type="text" name="product_searchBar" id="product_sb" placeholder="Search Product">
        <input type="submit" value="Search" name="product_searchBtn">
    </form>
</div>

<div class="product--table-elem">
<table class="product--list">
    <tr>
        <th class="span_width">Product</th>
        <th>Status</th>
        <th>Inventory</th>
        <th>Category</th>
        <th>Vendor</th>
    </tr>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
$query = "SELECT * FROM `product_details` LIMIT 4;";
$finCon = mysqli_query($conn, $query);

while($tab_product = mysqli_fetch_assoc($finCon)){
?>
    <tr>
        <td>
            <div class="flex">
            <img src="<?php echo '../../ProductImage/'.$tab_product['product_image']; ?>" alt="product_img">
            <p class="product_tab-name"><b><?php echo $tab_product['product_title']; ?></b></p>
            </div>
        </td>
        <td><?php echo $tab_product['product_status']; ?></td>
        <td><?php echo $tab_product['product_inventory']; ?></td>
        <td><?php echo $tab_product['product_category']; ?></td>
        <td><?php echo $tab_product['product_vendor']; ?></td>
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