<?php 
error_reporting(0);
$conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
$query = "SELECT * FROM `product_details`;";

$finCon = mysqli_query($conn, $query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/style/style.css">
    <link rel="stylesheet" href="../../Assets/style/collection.css">
    <?php
    include '../../CodeFiles/config/cdn.php'; 
    ?>
    <title>Collections</title>
</head>
<body> 
<?php 
include '../../CodeFiles/config/header.php';
?>
<div class="black_box"></div>
<h1 class="collectionP_heading">Collection Page</h1>
<div class="collection_card-grabber">
    <div class="collection_card">
        <?php 
        while($assoc = mysqli_fetch_assoc($finCon)){
        ?>
        <div class="collection_cl_grab-box">
        <a href="product.php?id=<?php echo rawurlencode($assoc['product_id']); ?>">
        <div class="card_box">
                <div class="image_box">
                    <img src="<?php echo '../../ProductImage/'.$assoc['product_image']; ?>" alt="product-img" width="100%" height="300px">
                </div>
                <div class="product_info">
                  <h3><?php echo $assoc['product_title']?></h3>
                  <p><b style="font-size: 20px;">₹ <?php echo $assoc['product_Saleprice']?>.00</b> <del style="color: red;"><b style="color: red; font-size: 15px;">₹ <?php echo $assoc['product_Compareprice']?>.00</b></del></p>
                  <a href="../../CodeFiles/templates/cart.php"><button class="product-ATC">Add To Cart</button></a>
                  <br>
                  <button class="check-product">Check Product</button>
                </div>
            </div>
        </div>
        </a>
        <?php
        }
        ?>
    </div>
</div>


<div class="pagination_block">
    <button class="page_1 pagi_btn">1</button>
    <button class="page_2 pagi_btn">2</button>
    <button class="page_3 pagi_btn">3</button>
    <button class="page_4 pagi_btn">4</button>
    <button class="page_5 pagi_btn">5</button>
</div>





<?php 
include '../../CodeFiles/config/footer.php';
?>



<script src="../../Assets/script/global-min.js"></script>
</body>
</html>