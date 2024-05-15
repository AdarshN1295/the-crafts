<footer class="custom_footer footer_block">
    <div class="sub--footer-an">
        <div class="footer-logo">
            <div class="footer-logo-div">
                <div>
                <a href="index.php">
                  <img src="../../Assets/media/logo.png" alt="footer-logo">
                </a>
                  <p class="footer-about">At The Crafts, we craft moments of warmth and elegance through our exquisite candles. Embrace the glow of handcrafted perfection. Illuminate your world with our passion for quality and style.</p>
                </div>
            </div>
        </div>
        <div class="footer-navLinks">
            <h4 class="footer--menu-heading">Quick Links</h4>
            <ul>
                <li class="footer--link">
                    <a href="../../CodeFiles/templates/index.php">Home</a>
                </li>
                <li class="footer--link">
                    <a href="../../CodeFiles/templates/collections.php">Shop All</a>
                </li>
                <li class="footer--link">
                    <a href="../../CodeFiles/templates/collections.php">Shop by Cateogry</a>
                </li>
                <li class="footer--link">
                    <a href="../../CodeFiles/templates/blog.php">Blogs</a>
                </li>
                <li class="footer--link">
                    <a href="../../CodeFiles/templates/contact.php">Contact us</a>
                </li>
            </ul>
        </div>
        <div class="footer-navLinks">
        <h4 class="footer--menu-heading">Informational Links</h4>
            <ul>
                <?php

                $con = mysqli_connect('localhost', 'root', '', 'the_crafts');

                $query = "SELECT * FROM `page_details`;";
                $finCon = mysqli_query($con, $query);
                while($page = mysqli_fetch_assoc($finCon)){
                ?>
                <li class="footer--link">
                    <a href="../../CodeFiles/templates/page.php?pageid=<?php echo $page['pageId']; ?>"><?php echo $page['pageTitle']; ?></a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="footer-newsletter">
            <h4 class="footer-form">Subscribe Us</h4>
            <p class="footer-subscribe">Subscribe to our newsletter for exclusive updates, special offers, and a touch of candlelit joy delivered to your inbox.</p>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="text" class="footer_inp" name="footer_email" placeholder="Subscribe us with our Email">
                <input type="submit"  class="footer_btn" name="footer_submit" value="Subscribe">
            </form>
            <?php
            error_reporting(0);
            $mail_input = $_POST['footer_email'];
            $submit = $_POST['footer_submit'];
            $conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
            $query = "INSERT INTO `email_marketing` (email) VALUES ('$mail_input')";
            echo $query;
                $finCon = mysqli_query($conn, $query);
            ?>
        </div>
    </div>
</footer>