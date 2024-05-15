<abbr title="Scroll to Top">
    <div id="scrollToTop">
        <i class="fa-solid fa-arrow-up"></i>
    </div>
</abbr>
<script>
    let scrollToTop = document.getElementById('scrollToTop');

scrollToTop.addEventListener('click', ()=>{
window.scrollTo({
    top: 0,
    behavior: "smooth"});
})
</script>
<?php
    error_reporting(0);
    $search_filter = $_GET['search'];
    $conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
    $query = "SELECT product_id FROM `product_details` WHERE product_title LIKE '%$search_filter%';";
    $fincon = mysqli_query($conn, $query);
    $assoc = mysqli_fetch_assoc($fincon)
?>

<header class="custom_header header__block">
    <div class="custom-sub--block-header">
        <div class="announcement-bar">
            <marquee behavior="scroll" direction="left">
                Welcom to our Website, The Crafts. 
            </marquee>
        </div>
        <div class="lower_header--block">

            <div class="logo_n_icons">
            <div class="head--mobile--nav">
                        <i class="fa-solid fa-bars"></i>
            </div>
                <div class="header_searchBar">
                    <div class="form">
                        <form action="../../CodeFiles/templates/product.php" method="GET">
                            <input type="text" name="search" class="search_filter" placeholder="Search Product">
                            <input type="hidden" name="id" value="<?php echo $assoc['product_id']; ?>">
                            <input type="submit" value="Search" class="search_btn">
                        </form>
                    </div>
                </div>
                <div class="header_logo">
                    <a href="index.php">
                    <img src="../../Assets/media/logo.png" alt="logo" width="300px">
                    </a>
                </div>
                <div class="header_icons">
                    <div class="head--icon-link">
                        <a href="../../CodeFiles/templates/cart.php"><div class="header--cart"><i class="fa-solid fa-cart-shopping"></i></div></a>
                    </div>
                </div>
            </div>
            <div class="nav_links">
                <nav>
                    <ul>
                        <li class="menu_links">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="menu_links">
                            <a href="collections.php">Shop All</a>
                        </li>
                        <li class="menu_links shop_by_color">
                            Shop By Color <i class="fa-solid fa-caret-down"></i>
                            <div class="dropdown_menu">
                            <ul class="dropdown__popup-Links">
                                <li class="drop-down-menu">Red</li>
                                <li class="drop-down-menu">yellow</li>
                                <li class="drop-down-menu">blue</li>
                                <li class="drop-down-menu"><a href="https://www.youtube.com">green</a></li>
                                <li class="drop-down-menu">pink</li>
                                <li class="drop-down-menu">lavender</li>
                            </ul>
                            </div>
                        </li>
                        <li class="menu_links">
                            <a href="../../CodeFiles/templates/blog.php">Blogs</a>
                        </li>
                        <a href="http://localhost/dynamic/CodeFiles/templates/page.php?pageid=27876777">
                        <li class="menu_links">About us</li>
                        </a>
                        <a href="../../CodeFiles/templates/contact.php"><li class="menu_links">Contact</li></a>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>