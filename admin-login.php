<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: #232323;
    font-family: sans-serif;}
html{
    width: 100%;
    height: 100%;}
body{
    width: 100%;
    height: 100%;
    background-image: url('../../Assets/media/login-back.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;}
div.login-form{
    width: 30%;
    border-radius: 30px;
    height: auto;
    text-align: center;
    padding: 20px;
    background: white;}
form{
    display: flex;
    align-items: center;
    gap: 10px;
    justify-content: center;
    flex-direction: column;}
input[type="text"],
input[type="password"]{
    width: 80%;
    border-radius: 12px;
    border: 1px solid #232323;
    padding: 10px 8px;}
input[type="submit"]{
    padding: 5px 10px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 1.4s;
    transition: all 0.4s ease;
    border: 1px solid #232323;}
input[type="submit"]:hover{
    background: black;
    color: white;}
form label{
    width: 80%;
    padding: 5px 10px;
    text-align: left;}
</style>


</head>
<body>
    
<div class="login-form">
    <h2 class="login-heading">Store Admin Login</h2>
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
    <label>Email : </label>
     <input type="text" name="login_mail" placeholder="Write your Email">
     <label>Password : </label>
     <input type="password" name="login_pass" placeholder="Write your Password">
     <input type="submit" name="login_submit" value="Login">
    </form>
    <?php 
if(isset($_POST['login_submit'])){

$mail = $_POST['login_mail'];
$pass = md5($_POST['login_pass']);

$_SESSION['SesUser'] = $mail;
$_SESSION['SesPass'] = $pass;

$conn = mysqli_connect("localhost", "root", "", "the_crafts");
// $query = "SELECT * FROM `admin` WHERE email = '$mail' && pass = '$pass'";
$query = "SELECT * FROM `admin` WHERE email = '$mail';";
$fin = mysqli_query($conn, $query);

if(mysqli_num_rows($fin) == 1){
    header('Location:http://localhost/dynamic/CodeFiles/templates/admin-panel.php');
} else {
    echo '<p style="color: red; margin: 10px 0;">Invalid Username and Password</p>';}

}
?>

</div>


</body>
</html>

