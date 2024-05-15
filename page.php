<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/style/style.css">
    <link rel="stylesheet" href="../../Assets/style/page.css">
    <?php
    include '../../CodeFiles/config/cdn.php'; 
    $page_id = $_GET['pageid'];
    ?>
    <title>Page</title>
</head>
<body>

<?php
include '../../CodeFiles/config/header.php';
    $conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
    $query = "SELECT * FROM `page_details` WHERE pageId = $page_id;";
    $finCon = mysqli_query($conn, $query);
    $pageContent = mysqli_fetch_assoc($finCon); 
?>

<div class="black_box"></div>
<h1 class="page_title"><?php echo $pageContent['pageTitle']; ?><br> <p class="page_breadcrumb">home / <?php echo $pageContent['pageTitle']; ?></p></h1>

<div class="page_content">
    <div class="page___subData">
        <h2 class="page_heading"><?php echo $pageContent['pageTitle']; ?></h2>
        <div class="page_content"><?php echo htmlspecialchars_decode($pageContent['pageDescription']); ?></div>
    </div>
</div>

<?php

include '../../CodeFiles/config/footer.php';

?>


<script src="../../Assets/script/global-min.js"></script>
</body>
</html>