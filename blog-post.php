<?php
include '../../CodeFiles/config/header.php';
include '../../CodeFiles/config/cdn.php';

$blog_id = $_GET['blogid'];

?>

<style>

div.main_content--blogpost{
    width: 100%;
    padding: 20px;}

div.blog__post{
    margin: 10px auto;
    width: 90%;}

div.blog_img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    overflow: hidden;
    margin: 20px auto;}

h2.blog__name{
    font-size: 40px;
    margin: 20px 0;
    font-family: var(--font);}

p.blog__desc{
    text-align: justify;
    margin: 5px 0 10px;
    line-height: 30px;}

p.blog__author,
p.blog__date{
    color: #c6c6c6;
}

</style>

<link rel="stylesheet" href="../../Assets/style/blog.css">
<link rel="stylesheet" href="../../Assets/style/style.css">
<div class="black_box"></div>

<div class="main_content--blogpost">
<?php 
$conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
$query  = "SELECT * FROM `blog_details` WHERE blog_id = blog_id;";
$fincon = mysqli_query($conn, $query);

while($blog = mysqli_fetch_assoc($fincon)){
?>
    <div class="blog__post">
        <h2 class="blog__name"><?php echo $blog['blog_name']; ?></h2>
        <div class="blog_img"> 
            <img src="<?php echo '../../ProductImage/'.$blog['blog_media']; ?>" alt="blog_img" class="blog__img" width="100%">
        </div>
        <p class="blog__desc"><?php echo $blog['blog_description']; ?></p>
        <p class="blog__author"><?php echo $blog['blog_author']; ?></p>
        <p class="blog__date"><?php echo $blog['blog_date']; ?></p>
    </div>
    <?php
}
?>
</div>


<?php
include '../../CodeFiles/config/footer.php';
?>



