<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/style/admin.css">
    <?php
    include '../../CodeFiles/config/cdn.php';
    ?>
    <title>Admin - The Crafts</title>
</head>
<body>
    
<?php 

if($_SESSION['SesUser']){
} else {
    header('Location:http://localhost/dynamic/CodeFiles/templates/admin-login.php');
}
?>

<main class="main--content">
    <div class="left--aside">
        <div class="menu">
            <ul class="ul--list-wrapper">
                <li class="menu_link link_home"><i class="fa-solid fa-house"></i>Home</li>
                <li class="menu_link link_orders"><i class="fa-solid fa-gift"></i>Orders</li>
                <li class="menu_link link_products"><i class="fa-solid fa-tags"></i>Products</li>
                <li class="menu_link link_collections"><i class="fa-solid fa-list"></i>Collections</li>
                <li class="menu_link link_customers"><i class="fa-solid fa-user"></i>Customers</li>
                <li class="menu_link link_blog"><i class="fa-regular fa-images"></i>Blogs</li>
                <li class="menu_link link_pages"><i class="fa-solid fa-file"></i>Pages</li>
                <li class="menu_link link_settings"><i class="fa-solid fa-gear"></i>Settings</li>
                <a class="check--website-anchor" href="http://localhost/dynamic/CodeFiles/templates/" target="blank"><li class="menu_link link_discounts"><i class="fa-regular fa-eye"></i> Check Website</li></a>
            </ul>
        </div>
    </div>

    <div class="right--aside">
        <div id="admin-panel--content-box" class="Rsub_wrapper">
            <h2 class="welcome_msg">Hello Adarsh, Welcome to Admin Panel</h2>
        </div>
    </div>
</main>

<script src="../../Assets/script/admin-script.js"></script>
</body>
</html>