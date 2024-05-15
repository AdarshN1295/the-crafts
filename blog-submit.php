<?php 

$blog_title = $_POST['b-title'];
$blog_description = $_POST['b-desc'];

$filename = $_FILES["b-image"]["name"];
$tempname = $_FILES["b-image"]["tmp_name"];
$folder = "../../ProductImage/".$filename;

move_uploaded_file($tempname, $folder);

$blog_status = $_POST['b-status'];
$blog_category = $_POST['b-categ'];
$blog_author = $_POST['b-author'];

if(isset($_POST['b-submit'])){
echo '<pre>';
print_r($_FILES);
echo '</pre>';}

$current_timestamp = time();
$formatted_date = date('d F, Y', $current_timestamp);

$blog_id = rand(10000000, 99999999);

$conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
$query = "INSERT INTO `blog_details` (blog_id, blog_name, blog_description, blog_media, blog_author, blog_date, blog_category, blog_status) VALUES ($blog_id, '$blog_title', '$blog_description', '$filename', '$blog_author','$formatted_date', '$blog_category', '$blog_status');";

$finCon = mysqli_query($conn, $query);
?>