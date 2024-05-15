<?php 
error_reporting(0);
$pro_id = $_GET['id'];

$conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
$query = "SELECT * FROM `product_details` WHERE product_id = $pro_id;";

$finCon = mysqli_query($conn, $query);

$pro = mysqli_fetch_assoc($finCon);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/style/style.css">
    <link rel="stylesheet" href="../../Assets/style/product-page.css">
    <?php 
    include '../../CodeFiles/config/cdn.php'
    ?>
    <title>Product Page</title>
</head>
<body>

<?php
include '../../Codefiles/config/header.php';
?>

<div class="black_box"></div>

<div class="product__mainContainer">
    <div class="product_info">
        <div class="product_grid">
            <div class="product-image--media">
                <img src="<?php echo '../../ProductImage/'.$pro['product_image']; ?>" alt="product_img" width="100%">
            </div>
            <div class="product-box--content">
                <div class="sub_content">
                    <h2 class="product_title"><?php echo $pro['product_title']; ?></h2>
                    <div class="star_rating"> <b>Rating : </b> 
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="product_price">₹ <?php echo $pro['product_Saleprice']; ?>.00<del class="compare_price">₹ <?php echo $pro['product_Compareprice']; ?>.00</del></div>
                    <form action="checkout.php" method="GET">
                    <h3 class="variant_heading">Color Variant : </h3>
                    <div class="color_variant">
                        <div class="variant--colors">
                            <input  type="radio" name="pro_color" class="absolute_colorName" value="Red" checked/>
                        </div>
                        <div class="variant--colors">
                        <input  type="radio" name="pro_color" class="absolute_colorName" value="Yellow"/>
                        </div>
                        <div class="variant--colors">
                        <input  type="radio" name="pro_color" class="absolute_colorName" value="Blue"/>
                        </div>
                        <div class="variant--colors">
                        <input  type="radio" name="pro_color" class="absolute_colorName" value="Green"/>
                        </div>
                    </div>
                    <p class="note_color" style="margin: 10px 0;"><b>Color : </b></p>
                    <div class="quantity--block">
                        <h3 class="product_quantity--heading"><b>Quantity :</b></h3>
                        <div class="quantity--box">
                            <button class="minus">-</button>
                            <input type="number" name="check_quantity" value="1"/>
                            <button class="plus">+</button>
                            <input type="hidden" name="product" value="<?php echo $pro_id; ?>">
                        </div>
                    </div>
                    <div class="buy--buttons">
                        <div class="product--atc_btn">
                            <a href="../../CodeFiles/templates/cart.php"><button class="atc_cart--ajax">Add To Cart</button></a>
                        </div>
                        <div class="product--buy_btn">
                        <button class="buy_now--checkout">Buy it Now</button>
                        </div>
                    </div>
                    <div class="share_product">
                        <span class="product-share--button"><i class="fa-solid fa-share-from-square"></i>Share Product</span>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="product_description">
            <div class="description--wrapper">
                <h2 class="description--title">Product Description
                </h2>
                <span class="description--content"><?php echo htmlspecialchars_decode($pro['product_description']); ?>
                    <ul class="description--list">
                        <li class="product--description"><b>Weight</b></li>
                        <li class="product--description"><b>Color</b></li>
                        <li class="product--description"><b>Dimension</b></li>
                        <li class="product--description"><b>Size</b></li>
                    </ul>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur qui dolor veritatis possimus, tenetur omnis aliquid reprehenderit corrupti eius odio sunt, officiis atque porro, sit iusto illo? Corporis temporibus nisi optio exercitationem veritatis, atque eius dolorem. Dolorem eaque architecto deserunt?
                </span>
            </div>
        </div>
    </div>
</div>
<div class="you__mayLike">
<div class="sub--featured-product--wrapper">
        <h2 class="product--may-like">Product You May Like</h2>
        <div class="featured--block carousel">
        <div class="card_box">
                <div class="image_box">
                    <img src="https://imgs.search.brave.com/DTD9M4ri2hmJVcxf1PBwRp_DneR7H5XvIqM7F3SVQRk/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudW5zcGxhc2gu/Y29tL3Bob3RvLTE2/MDMwMDY5MDUwMDMt/YmU0NzU1NjNiYzU5/P3E9ODAmdz0xMDAw/JmF1dG89Zm9ybWF0/JmZpdD1jcm9wJml4/bGliPXJiLTQuMC4z/Jml4aWQ9TTN3eE1q/QTNmREI4TUh4elpX/RnlZMmg4Tkh4OFky/RnVaR3hsZkdWdWZE/QjhmREI4Zkh3dw" alt="product-img" width="100%" height="300px">
                </div>
                <div class="product_info">
                  <h3>Product Name</h3>
                  <p>PRICE : Rs, 100 INR</p>
                  <a href="../../CodeFiles/templates/cart.php"><button class="product-ATC">Add To Cart</button></a>
                  <button class="check-product">Check Product</button>
                </div>
            </div>

            <div class="card_box">
                <div class="image_box">
                    <img src="https://imgs.search.brave.com/DTD9M4ri2hmJVcxf1PBwRp_DneR7H5XvIqM7F3SVQRk/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudW5zcGxhc2gu/Y29tL3Bob3RvLTE2/MDMwMDY5MDUwMDMt/YmU0NzU1NjNiYzU5/P3E9ODAmdz0xMDAw/JmF1dG89Zm9ybWF0/JmZpdD1jcm9wJml4/bGliPXJiLTQuMC4z/Jml4aWQ9TTN3eE1q/QTNmREI4TUh4elpX/RnlZMmg4Tkh4OFky/RnVaR3hsZkdWdWZE/QjhmREI4Zkh3dw" alt="product-img" width="100%" height="300px">
                </div>
                <div class="product_info">
                  <h3>Product Name</h3>
                  <p>PRICE : Rs, 100 INR</p>
                  <a href="../../CodeFiles/templates/cart.php"><button class="product-ATC">Add To Cart</button></a>
                  <button class="check-product">Check Product</button>
                </div>
            </div>

            <div class="card_box">
                <div class="image_box">
                    <img src="https://imgs.search.brave.com/DTD9M4ri2hmJVcxf1PBwRp_DneR7H5XvIqM7F3SVQRk/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudW5zcGxhc2gu/Y29tL3Bob3RvLTE2/MDMwMDY5MDUwMDMt/YmU0NzU1NjNiYzU5/P3E9ODAmdz0xMDAw/JmF1dG89Zm9ybWF0/JmZpdD1jcm9wJml4/bGliPXJiLTQuMC4z/Jml4aWQ9TTN3eE1q/QTNmREI4TUh4elpX/RnlZMmg4Tkh4OFky/RnVaR3hsZkdWdWZE/QjhmREI4Zkh3dw" alt="product-img" width="100%" height="300px">
                </div>
                <div class="product_info">
                  <h3>Product Name</h3>
                  <p>PRICE : Rs, 100 INR</p>
                  <a href="../../CodeFiles/templates/cart.php"><button class="product-ATC">Add To Cart</button></a>
                  <button class="check-product">Check Product</button>
                </div>
            </div>

            <div class="card_box">
                <div class="image_box">
                    <img src="https://imgs.search.brave.com/DTD9M4ri2hmJVcxf1PBwRp_DneR7H5XvIqM7F3SVQRk/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudW5zcGxhc2gu/Y29tL3Bob3RvLTE2/MDMwMDY5MDUwMDMt/YmU0NzU1NjNiYzU5/P3E9ODAmdz0xMDAw/JmF1dG89Zm9ybWF0/JmZpdD1jcm9wJml4/bGliPXJiLTQuMC4z/Jml4aWQ9TTN3eE1q/QTNmREI4TUh4elpX/RnlZMmg4Tkh4OFky/RnVaR3hsZkdWdWZE/QjhmREI4Zkh3dw" alt="product-img" width="100%" height="300px">
                </div>
                <div class="product_info">
                  <h3>Product Name</h3>
                  <p>PRICE : Rs, 100 INR</p>
                  <a href="../../CodeFiles/templates/cart.php"><button class="product-ATC">Add To Cart</button></a>
                  <button class="check-product">Check Product</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../../Codefiles/config/footer.php';
?>
    
<script>
const atc_productBtn = document.querySelector('button.atc_cart--ajax').disabled = true;
</script>
<script src="../../Assets/script/global-min.js"></script>
</body>
</html>