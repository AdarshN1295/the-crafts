<?php
error_reporting(0);
$userFName = $_POST['customer-first-name'];
$userLName = $_POST['customer-last-name'];
$userMNumber = $_POST['customer_number'];
$userEmail = $_POST['customer_email'];
$userAddress = $_POST['customer_address'];
$userLandmark = $_POST['customer_landmark'];
$userCity = $_POST['customer_city'];
$userState = $_POST['customer_state'];
$userPincode = $_POST['customer_pincode'];

$orderID = rand(10000000, 999999999);
$productQuantity = $_POST['test-quantity'];
$productColor = $_POST['test-color'];
$productID = $_POST['test-productId'];
$productPrice = $_POST['total-price'];

$conn = mysqli_connect('localhost', 'root', '', 'the_crafts');

$query = "INSERT INTO `users_orders` (userFirstName, userLastName, userMobileNumber, userEmail, userAddress, userLandmark, userCity, userState, userPincode, orderID, productID, productColor, productQuantity, productPrice) VALUES ( '$userFName', '$userLName', '$userMNumber', '$userEmail', '$userAddress', '$userLandmark', '$userCity', '$userState', $userPincode, '$orderID', '$productID', '$productColor', '$productQuantity   ',' ₹ $productPrice' );";

$fincon = mysqli_query($conn, $query);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Placed</title>

<style>


*{
    box-sizing: border-box;
    font-family: sans-serif;}

p.processing{
    margin: 0;
    font-size: 16px; 
    font-family: sans-serif;}

p.processing h3{
    font-size: 24px;
    margin-top: 0;}

p.button_text{
  color: #666;
  text-decoration: underline;
  cursor: pointer;}

</style>

</head>
<body>
    
<center style="margin-top: 200px;">
<img src="../../Assets/media/loader1.gif" alt="lazy_loader" width="100px" class="lazy_loader">
<p class="processing">Your order is processing.</p>

<p class="button_text"></p>

</center>



<script>

setTimeout(()=>{
 
const para = document.querySelector('p.processing');
para.innerText = 'Your confirmation email will be sent to your email soon.';
let head3 = document.createElement('h3');
head3.setAttribute('class', 'custom--js');
head3.innerText = 'Thank You for Your Order!';
para.prepend(head3)

const img = document.querySelector('img.lazy_loader');
img.setAttribute('src', '../../Assets/media/finish1.gif')
img.setAttribute('width', '150px')

const button = document.querySelector('p.button_text');
button.innerText = 'Continue Shopping'
button.addEventListener('click', (btn)=>{
    window.open('../../CodeFiles/templates/index.php', '_self');
})

}, 5000)


</script>

</body>
</html>
