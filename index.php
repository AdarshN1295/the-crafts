<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Discover the warm glow of our exquisite candle collection at 'THE CRAFTS'. Elevate your space with handcrafted scents and stylish designs. Explore a world of ambiance and tranquility with our premium candles. Shop now for a touch of elegance and fragrance">
    <meta name="keywords" content="Handcrafted candles, Premium candle collection, Unique candle designs, Aromatic candles, Luxury home fragrances, Scented candle varieties, Home spa essentials, Modern candle accessories, Natural wax candles, Stylish candle decor, Eco-friendly candle options,Relaxation and wellness candles, Ambient lighting solution, Personalized candle gifts, Sustainable candle options" >
    <meta name="author" content="Nigam Enterprises">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/style/style.css">
    <link rel="icon" href="../../Assets/media/candle.png" type="image/x-icon">
    <?php
    include '../../CodeFiles/config/cdn.php'; 
    ?>
    <title>The Crafts</title>
</head>
<body>

<?php 
include '../../CodeFiles/config/header.php';
?>

<section class="section_image">
    <div class="image_banner">
        <img src="https://images.pexels.com/photos/1170586/pexels-photo-1170586.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="image__banner">
    </div>
</section>

<section class="section_welcome">
    <div class="sub_welcomeBlock">
        <h1 class="welcome_heading">Welcome to " The Crafts"</h1>
        <p class="welcome_description">Welcome to <b>The Crafts</b>, where every flicker tells a story and every scent evokes an emotion. Step into a world of artisanal elegance and discover the enchantment of handmade candles. Immerse yourself in the warm glow of our carefully crafted collection, where passion meets craftsmanship. At The Craft, we believe in illuminating moments and creating an atmosphere that resonates with love and light. Explore our curated selection, ignite your senses, and let the journey of crafting light and love begin. Welcome to a space where each candle is a work of heart.</p>
        <div class="welcome_buttonBOX">
          <button class="welcome_btn"><a href="page.php?pageid=27876777">Learn More</a></button>
        </div>
    </div>
</section>
<section class="featured--product product_card">
    <div class="sub--featured-product--wrapper">
        <h2 class="featured_product--heading">Featured Product</h2>
        <div class="featured--block carousel">

        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
        $query = "SELECT * FROM `product_details` LIMIT 4; ";
        $fincon = mysqli_query($conn, $query);
        while($featured = mysqli_fetch_assoc($fincon)){
        ?>
    <a href="product.php?id=<?php echo rawurlencode($featured['product_id']); ?>">
        <div class="card_box">
                <div class="image_box">
                    <img src="<?php echo '../../ProductImage/'.$featured['product_image']; ?>" alt="product-img" width="100%" height="300px">
                </div>
                <div class="product_info">
                  <h3><?php echo $featured['product_title']; ?></h3>
                  <p>PRICE : <b style="font-size: 20px;">₹ <?php echo $featured['product_Saleprice']?>.00</b> <del style="color: red;"><b style="color: red; font-size: 15px;">₹ <?php echo $featured['product_Compareprice']?>.00</b></del></p>
                  <a href="../../CodeFiles/templates/cart.php"><button class="product-ATC">Add To Cart</button></a>
                  <br>
                  <button class="check-product">Check Product</button>
                </div>
            </div>
    </a>
            <?php
        };
            ?>
        </div>
    </div>
</section>

<section class="section-infographics">
    <div class="infographic--wrapper">
        <h2 class="infographics_heading">Illuminate Your Life with Candles</h2>
        <div class="flex_infographics">
            <div class="sub_flex__infograph">
                <div class="row--infographics-a info_row">
                    <div class="info_content">
                        <h3 class="info-graphic_heading">Soothe Your Soul</h3>
                        <p class="info-graphic_para">Experience moments of calm and relaxation as the gentle glow of candles creates a serene ambiance. Perfect for unwinding after a long day or setting the mood for a tranquil evening.</p>
                    </div>
                    <div class="info-graphic_icon">
                        <img src="../../Assets/media/soothe.png" alt="lotus_infographic">
                    </div>
                </div>

                <div class="row--infographics-b info_row">
                <div class="info_content">
                        <h3 class="info-graphic_heading">Scentsational Wellness</h3>
                        <p class="info-graphic_para">Elevate your senses with our aromatic candles, designed to evoke a range of moods. From soothing lavender to invigorating citrus, indulge in the therapeutic benefits of scented candles for a delightful and sensory experience.</p>
                    </div>
                    <div class="info-graphic_icon">
                        <img src="../../Assets/media/aroma.png" alt="lotus_infographic">
                    </div>
                </div>

                <div class="row--infographics-c info_row">
                <div class="info_content">
                        <h3 class="info-graphic_heading">Decorate with Radiance</h3>
                        <p class="info-graphic_para">Illuminate your space with the beauty of candlelight. Enhance your home decor with our stylish candles, turning any room into a warm and inviting haven. Create a cozy atmosphere.</p>
                    </div>
                    <div class="info-graphic_icon">
                        <img src="../../Assets/media/decorative.png" alt="lotus_infographic">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_category">
    <div class="sub__shopBy_collection">
        <h2 class="shopByCategory__heading">Shop By Category</h2>
        <div class="category--list">
            <div class="category_element">
                <img src="https://img.freepik.com/free-photo/front-view-red-candle-lighting-isolated-melting-light-fire-flame_140725-16091.jpg?t=st=1710003980~exp=1710007580~hmac=310f23776e9aea38c868e2c936fcd9c61cac6aa929724dc7674190aae46a5703&w=360" alt="category_color">
                <p class="abso_category">Red</p>
            </div>

            <div class="category_element">
                <img src="https://img.freepik.com/free-vector/church-candle-dark_1284-42553.jpg?t=st=1710004018~exp=1710007618~hmac=96fd579cb9518758a2d657ad0905205895ff7215126b2833d4b8a3a842127ede&w=740" alt="category_color">
                <p class="abso_category">Yellow</p>
            </div>

            <div class="category_element">
                <img src="https://img.freepik.com/premium-photo/lighted-candles-with-beads-close-up_392895-30485.jpg?w=360" alt="category_color">
                <p class="abso_category">Green</p>
            </div>

            <div class="category_element">
                <img src="https://img.freepik.com/free-photo/blue-candle-blue_53876-74959.jpg?t=st=1710004125~exp=1710007725~hmac=c23a41fca1d345462eb975492a32319f21e6f3167ba6ccd8d89aea7a5d9b4f51&w=360" alt="category_color">
                <p class="abso_category">Blue</p>
            </div>

            <div class="category_element">
                <img src="https://img.freepik.com/premium-photo/concept-relaxation-with-aroma-candle-close-up_185193-79289.jpg?w=740" alt="category_color">
                <p class="abso_category">Pink</p>
            </div>

            <div class="category_element">
                <img src="https://img.freepik.com/premium-photo/fresh-lavender-flowers-candle_87742-767.jpg?w=740" alt="category_color">
                <p class="abso_category">lavender</p>
            </div>
        </div>
    </div>
</section>

<section class="section_image-banner">
    <div class="image-banner">
        <a href="../../CodeFiles/templates/collections.php" class="first_image--banner">
        <img src="../../Assets/media/desktop-banner.jpg" alt="image--banner" width="100%"
        height="auto"></a>
        <a href="../../CodeFiles/templates/collections.php" class="second_image--banner">
        <img src="../../Assets/media/mobile_banner.jpg" alt="image--banner" width="100%"
        height="auto"></a>
    </div>
</section>

<section class="section_featured-product">
    <div class="sub-featured--product">
        <h2 class="featured-product_heading">Featured Product</h2>
        <div class="featured--product-flex">
            <div class="image_child-block">
                <img src="https://m.media-amazon.com/images/I/71AIHX3vQxL._SL1500_.jpg" alt="product_img" width="100%" height="100%">
            </div>
            <div class="product-info_child-block">
                <h3 class="featuredProduct_heading">Product Name Should be There</h3>
                <p class="featuredProduct_vendor">Nigam Group</p>
                <p class="featuredProduct_starRating"><b>Rating :</b> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></p>
                <p class="featuredProduct_shortDescription">this is our new product of candle Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                <ul>
                    <li>Libero, nostrum consectetur quos ea deleniti explicabo, assumenda, consequatur nobis eligendi eum voluptatum aliquid non ipsa? Voluptatum,</li>
                    <li> consequatur, ab reiciendis repellendus, pariatur soluta iure eum quaerat quis corporis corrupti esse incidunt. Eos voluptas illum vero nesciunt</li>
                    <li>et sapiente iste libero dolor laborum doloribus quod nemo quos sed perferendis, saepe eveniet porro magnam officia in culpa illo eum eius ut.</li>
                </ul>
                </p>
                <p class="featuredProduct_price">Rs. 80.00 <del>Rs. 100.00</del></p>
                <div class="product_buttons">
                    <a class="button_atc--anchor" href="../../CodeFiles/templates/cart.php"><button class="button_atc">Add To Cart</button></a>
                    <button class="button_cp">Check Product</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_review">
    <div class="sub-reviews">
  <h2 class="reviews_heading">Client Reviews</h2>
  <div class="main-flex-review">
    <div class="review1 review">
      <div class="R-content rcRed">
        <div class="rCont-cent">
        <p>The Craft candles have truly transformed my home into a haven of tranquility. The exquisite scents and elegant designs add a touch of luxury to every room. My favorite? The lavender-scented candle – it's pure bliss after a long day. Thank you for crafting such beautiful moments!"</p>
        <span>Radhika Mehra</span>
      </div>
      </div>
      <div class="R-img"></div>
    </div>
    <div class="review2 review">
      <div class="R-img"></div>
      <div class="R-content rcYellow">
        <div class="rCont-cent">
        <p>I'm a candle enthusiast, and The Craft has exceeded my expectations. The quality of craftsmanship is outstanding, and the diverse range of scents allows me to curate the perfect ambiance for any occasion. The packaging is also top-notch – truly a delightful experience from order to delivery.</p>
        <span>Vikram Singhania</span>
      </div>
      </div>
    </div>
    <div class="review3 review">
      <div class="R-content rcGreen">
        <div class="rCont-cent">
        <p>Being eco-conscious, I was thrilled to find sustainable candle options at The Craft. The natural wax candles not only burn cleanly but also fill my home with a warm, inviting glow. It's wonderful to support a brand that values both elegance and environmental responsibility.</p>
        <span>Ananya Patel</span>
      </div>
      </div>
      <div class="R-img"></div>
    </div>
    <div class="review4 review">
      <div class="R-img"></div>
      <div class="R-content rcBlue">
        <div class="rCont-cent">
        <p>The Craft has become my go-to for personalized gifts. The option to customize candles for special occasions adds a thoughtful touch. I recently gifted a set to a friend, and the joy on their face was priceless. The Craft is my secret to giving memorable and unique presents.</p>
        <span>Rajiv Kapoor</span>
      </div>
      </div>
    </div> 
  </div>
    </div>
</section>

<section class="section_usp">
    <h2 class="brandUSP_heading">Glimpses of Glow: Our Icon Gallery</h2>
    <div class="brand-usp--wrapper">
        <div class="usp_block">
            <img src="../../Assets/media/usp1.png" alt="brand_usp">
        </div>
        <div class="usp_block">
            <img src="../../Assets/media/usp2.png" alt="brand_usp">
        </div>
        <div class="usp_block">
            <img src="../../Assets/media/usp3.png" alt="brand_usp">
        </div>
        <div class="usp_block">
            <img src="../../Assets/media/usp4.png" alt="brand_usp">
        </div>
        <div class="usp_block">
            <img src="../../Assets/media/usp5.png" alt="brand_usp">
        </div>
    </div>
</section>

<?php
include '../../CodeFiles/config/footer.php';
?>

</main>

<script src="../../Assets/script/global-min.js"></script>
<script src="../../Assets/script/hp-popup.js"></script>
</body>
</html>



