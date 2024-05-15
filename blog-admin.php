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
<h2 class="working">Blogs</h2>
<div class="product_addBTN">
    <button id="product--add--button" class="addbtn" onclick="addBlog__innerText()">Add Blog</button>
</div>
</div>

<div class="search_bar">
    <form action="#">
        <input type="text" name="product_searchBar" id="product_sb" placeholder="Search Blog">
        <input type="submit" value="Search" name="product_searchBtn">
    </form>
</div>

<div class="product--table-elem">
<table class="product--list">
    <tr>
        <th>Blog Image</th>
        <th>Blog Title</th>
        <th>Status</th>
        <th>Author</th>
        <th>Date</th>
    </tr>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
$query = "SELECT * FROM `blog_details` LIMIT 3;";
$finCon = mysqli_query($conn, $query);

while($tab_blog = mysqli_fetch_assoc($finCon)){
?>
    <tr>
        <td><img src="<?php echo '../../ProductImage/'.$tab_blog['blog_media']; ?>" alt="product_img"></td>
        <td><b><?php echo $tab_blog['blog_name']; ?></b></td>
        <td><?php echo $tab_blog['blog_status']; ?></td>
        <td><?php echo $tab_blog['blog_author']; ?></td>
        <td><?php echo $tab_blog['blog_date']; ?></td>
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