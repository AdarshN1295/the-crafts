<?php 

$contactName = $_POST['contact_name'];
$contactNumber = $_POST['contact_number'];
$contactEmail = $_POST['contact_email'];
$contactMessage = $_POST['contact_message'];

require '../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
    $mail->addAddress('adarshnigam.ev1295@gmail.com', $contactName); 

    $mail->isHTML(true);
    $mail->Subject = 'Reach Out: A New Contact Message!';
    $mail->Body    = 'We\'ve received a new message from a visitor looking to connect. Here are the details: <br><br> <b>Customer Name : </b>' . $contactName . '<br>' . '<b>Customer Number : </b>' . $contactNumber . '<br>' . '<b>Customer Email : </b>' . $contactEmail . '<br>' . '<b>Customer Message : </b>' . $contactMessage . '<br><br> Let\'s ensure a prompt and personalized response to their query. <br><br> <h4>Best Regards, <br>
    The Crafts</h4>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


?>