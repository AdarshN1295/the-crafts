<?php 

$product_title = $_POST['p-title'];
$product_description = $_POST['p-desc'];

$filename = $_FILES["p-image"]["name"];
$tempname = $_FILES["p-image"]["tmp_name"];
$folder = "../../ProductImage/".$filename;

move_uploaded_file($tempname, $folder);

$product_SalePrice = $_POST['p-Sprice'];
$product_ComparePrice = $_POST['p-Cprice'];
$product_inventory = $_POST['p-inve'];

$product_status = $_POST['p-status'];

$product_category = $_POST['p-categ'];
$product_ProductType = $_POST['p-type'];
$product_vendor = $_POST['p-vendor'];
$product_tag = $_POST['p-tag'];

if(isset($_POST['p-submit'])){
echo '<pre>';
print_r($_FILES);
echo '</pre>';}

$product_id = rand(10000000, 99999999);


$conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
$query = "INSERT INTO `product_details` (product_id, product_title, product_description, product_image, product_Saleprice, product_Compareprice, product_inventory, product_status, product_category, product_type, product_vendor, product_tag) VALUES ($product_id, '$product_title', '$product_description', '$filename', '$product_SalePrice','$product_ComparePrice', '$product_inventory', '$product_status', '$product_category', '$product_ProductType', '$product_vendor', '$product_tag' );";

$finCon = mysqli_query($conn, $query);

// echo $query;

?>