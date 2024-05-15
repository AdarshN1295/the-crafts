<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/style/admin.css">
    <title>Page</title>
</head>
<body>
    
<main id="main__content">

<div class="main__headElems">
<h2 class="working">Page</h2>
<div class="page_addBTN">
    <button id="product--add--button" class="addbtn" onclick="addPage__innerText()">Add Page</button>
</div>
</div>

<div class="page search_bar">
    <form action="#">
        <input type="text" name="page_searchBar" id="page_sb" placeholder="Search Page">
        <input type="submit" value="Search" name="page_searchBtn">
    </form>
</div>

<div class="page--table-elem">
<table class="page--list">
<?php
$conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
$query = "SELECT * FROM `page_details`;";
$finCon = mysqli_query($conn, $query);

while($tab_product = mysqli_fetch_assoc($finCon)){
?>
    <tr>
        <td class="span_width"><?php echo $tab_product['pageTitle']; ?></td>
        <td><?php echo $tab_product['pageStatus']; ?></td>
        <td><?php echo $tab_product['pageAuthor']; ?></td>
        <td><?php echo $tab_product['pageDate']; ?></td>
    </tr>
<?php
}
?>
</table>
<!-- <div class="page--pagination">
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