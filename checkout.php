<?php
// error_reporting(0);
$productInfo_checkout = $_GET['product'];
$product_quantity = $_GET['check_quantity'];
$conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
$query = "SELECT * FROM `product_details` WHERE product_id = $productInfo_checkout;";
$finCon = mysqli_query($conn, $query);
$check_product = mysqli_fetch_assoc($finCon);

$productColor = $_GET['pro_color'];

    $price = $check_product['product_Saleprice'];
    $sub_calc = $price * $product_quantity;
    $del_price = 40;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/style/checkout.css">
    <?php
    include '../../CodeFiles/config/cdn.php';
    ?>
    <title>Checkout Page</title>
</head>
<body>
    
<main class="checkout-main--grab">
    <header class="checkout--header">
        <div class="logo">
            <img src="../../Assets/media/logo.png" alt="logo">
        </div>
    </header>
    <div class="sub--checkout"> 
        <aside class="left_user-info">
            <div class="customer--details">
                <h2 class="checkout_heading">Checkout</h2>
                <form action="../../CodeFiles/templates/checkout-submit.php" method="POST">
                     <div class="form-name">
                        <input type="text" name="customer-first-name" placeholder="Your First Name" required  />
                        <input type="text" name="customer-last-name" placeholder="Your Last Name" required />
                     </div>
                     <input type="hidden" name="test-quantity" value="<?php echo $product_quantity; ?>">
                     <input type="hidden" name="test-productId" value="<?php echo $productInfo_checkout; ?>">
                     <input type="hidden" name="test-color" value="<?php echo $productColor; ?>">
                     <input type="hidden" name="total-price" value="<?php echo $sub_calc +  $del_price; ?>">
                     <input type="number" class="customer-number" name="customer_number" placeholder="Your Mobile Number" required >
                     <input type="text" class="customer-email" name="customer_email" placeholder="Your Email" required >
                     <div class="address-customer">
                     <input type="text" class="customer-address" name="customer_address" placeholder="Your Address" required >
                     <input type="text" class="customer-landmark" name="customer_landmark" placeholder="Landmark (Optional)">
                     </div>

                     <div class="state--box">
                        <input type="text" class="customer-city" name="customer_city" placeholder="City">
                        <select name="customer_state" class="customer-state">
                            <option value="Select State">Select State</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="West Bengal">West Bengal</option>
                            
                        </select>
                        <input type="text" class="customer-pincode" name="customer_pincode" placeholder="Pincode" required >
                     </div>
                     <div class="custom--termsBox"><input type="checkbox" class="tnc-btn--checkout"> <label>I have read the <a href="../../CodeFiles/templates/page.php?pageid=71553313">Terms &amp; Conditions</a><span> carefully. Please check the box to proceed to the next step.</span> </label> </div><br>
                     <input type="submit" value="Submit" class="checkout" disabled>
                </form>
            </div>
        </aside>
        <aside class="right_product-info">
            <div class="product-summary">
                <div class="product-det">
                    <div class="img-box">
                        <img src="<?php echo '../../ProductImage/'.$check_product['product_image']; ?>" alt="product_summary">
                        <div class="abso__quantity"><?php echo $product_quantity; ?></div>
                    </div>
                    <div class="product-title"><?php echo $check_product['product_title']; ?> / in <?php echo $productColor; ?> Color</div>
                    <div class="product-price">₹ <?php echo $check_product['product_Saleprice']; ?>.00</div>
                </div>
    
                <div class="product-total">
                    <div class="subtotal"><span>Product Subtotal</span><b>₹ <?php echo $sub_calc; ?>.00</b></div>
                    <div class="delivery"><span>Delivery Price</span><b>₹ 40</b></div>
                    <div class="total">
                    <h3>Total</h3><h3>₹ <?php echo $sub_calc +  $del_price; ?></h3>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</main>

<script>

const check_btn = document.querySelector('input.tnc-btn--checkout');
const checkout_able = document.querySelector('input.checkout');

check_btn.addEventListener('click', ()=>{
    if(check_btn.checked = true){
        checkout_able.style.cursor = 'pointer'
        checkout_able.removeAttribute('disabled');
    } else{
        checkout_able.setAttribute('disabled', '');
    }
})

</script>
</body>
</html>