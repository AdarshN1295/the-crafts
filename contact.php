<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/style/style.css">
    <?php
    include '../../CodeFiles/config/cdn.php';
    ?>
    <title>Contact us</title>
</head>
<body>
    
<?php
include '../../CodeFiles/config/header.php';
?>
<div class="black_box contact"></div>
<main class="contact-main--content">
    <div class="sub-wrapper">
        <h2 class="page_heading">Contact Us</h2>
        <br>
        <div class="formNcont_contact">
            <div class="contact-form">
                <form action="../../CodeFiles/templates/contact_sub.php" method="POST">
                <input type="text" name="contact_name" placeholder="Write Your Name">
                <input type="text" name="contact_number" placeholder="Write Your Mobile Number">
                <input type="text" name="contact_email" placeholder="Write Your Email">
                <textarea name="contact_message" cols="30" rows="10" placeholder="Write Your Message"></textarea>
                <input type="submit" name="submit_mail" value="Contact">
                </form>
            </div>
            <div class="contact-content"></div>
        </div>
    </div>
</main>
<?php
include '../../CodeFiles/config/footer.php';
?>

<script src="../../Assets/script/global-min.js"></script>
</body>
</html>