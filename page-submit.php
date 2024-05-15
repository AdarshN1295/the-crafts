<?php

$page_title = $_POST['page-title'];
$page_desc = $_POST['page-desc'];
$page_status = $_POST['page-status'];
$page_author = $_POST['page-author'];


$date =  date('d-m-y h:i:s');
$pageId = rand(10000000, 99999999);

$conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
$page_description = mysqli_real_escape_string($conn, $page_desc);

$query = "INSERT INTO `page_details` (pageId, pageTitle, pageDescription, pageStatus, pageAuthor, pageDate) VALUES ($pageId, '$page_title', '$page_description', '$page_status', '$page_author', '$date');";

echo $query;

$finCon = mysqli_query($conn, $query);

header('Location:http://localhost/dynamic/CodeFiles/templates/admin-panel.php');


?>