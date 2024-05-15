<?php
$conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
$name = $_POST['accept_name'];
$mail = $_POST['accept_mail'];
$orderId = $_POST['accept_orderID'];
$productID = $_POST['accept_productID'];
$query = "SELECT * FROM `product_details` WHERE product_id = '$productID';";
$fincon = mysqli_query($conn, $query);
$finAssoc = mysqli_fetch_assoc($fincon);
$message = '<b>Dear '. $name .'</b>,<br> I hope this email finds you well.
I regret to inform you that we are unable to fulfill your recent product order request for <b>'. '"' . $finAssoc['product_title'] . '"' . '</b>. After careful consideration, we have determined that we are currently unable to meet the demands of your order due to stock unavailability.<br><br>
Please accept our sincerest apologies for any inconvenience this may cause. We understand the importance of your order and assure you that we are working diligently to resolve the issue as quickly as possible.
In the meantime, if you have any questions or require further assistance, please do not hesitate to contact our customer support team at <b>"thecrafts@gmail.com"</b>. We are committed to providing you with the support and assistance you need.<br><br>
Thank you for your understanding and patience in this matter. We value your business and hope for the opportunity to serve you better in the future.<br><br>
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
    $mail->Subject = 'Notification of Product Order Rejection';
    $mail->Body    = $message;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>