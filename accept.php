<?php


$conn = mysqli_connect('localhost', 'root', '', 'the_crafts');


$name = $_POST['accept_name'];
$mail = $_POST['accept_mail'];
$orderId = $_POST['accept_orderID'];
$productID = $_POST['accept_productID'];
$query = "SELECT * FROM `product_details` WHERE product_id = '$productID';";
$fincon = mysqli_query($conn, $query);
$finAssoc = mysqli_fetch_assoc($fincon);
$message = '<b>Dear ' . $name .'</b>,<br> I hope this email finds you well.<br>
I am writing to confirm the successful delivery and acceptance of the product <b>'. '"' . $finAssoc['product_title'] . '"' . '</b> that you recently purchased from <b>The Crafts</b>. We are delighted to hear that the product has met your expectations and requirements.<br><br>
We take great pride in ensuring the quality and reliability of our products, and your satisfaction is our top priority. Your feedback is invaluable to us, and it serves as a testament to our commitment to providing excellent products and services.<br><br>
Should you have any further questions or require assistance regarding the product or anything else, please feel free to reach out to our customer support team at  <b>"thecrafts@gmail.com"</b>. We are always here to help.<br><br>
Once again, thank you for choosing <b>The Crafts</b>. We truly appreciate your business and look forward to serving you again in the future.
<br><br>
Best regards,<br>
Adarsh Nigam<br>
Founder of The Crafts<br>
The Crafts<br>
thecraftssupport@gmail.com';
require '../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$query2 = "SELECT * FROM `users_orders`;";

$finCon2 = mysqli_query($conn, $query2);

$tab_product = mysqli_fetch_assoc($finCon2);



$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'abhinigam1295@gmail.com';
    $mail->Password = 'sezo obub orvn tdcm';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('abhinigam1295@gmail.com', 'Adarsh Nigam');
    $mail->addAddress($tab_product['userEmail'], 'Adarsh'); 
    

    $mail->isHTML(true);
    $mail->Subject = 'Confirmation of Product Acceptance';
    $mail->Body    = $message;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>