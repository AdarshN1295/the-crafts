<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/style/blog.css">
    <link rel="stylesheet" href="../../Assets/style/style.css">
    <?php
    include '../../CodeFiles/config/cdn.php';
    ?>
    <title>Blog</title>
</head>
<body>

<?php
include '../../CodeFiles/config/header.php';
?>

<div class="black_box"></div>
<main class="blog--content">
    <div class="content">
        <h2 class="blog_heading">Blog</h2>
    </div>
    <div class="blogs_wrapper">
<?php 
$conn = mysqli_connect('localhost', 'root', '', 'the_crafts');
$query  = "SELECT * FROM `blog_details`;";
$fincon = mysqli_query($conn, $query);

while($blog = mysqli_fetch_assoc($fincon)){
?>
        <div class="blog_element">
          <a href="../../CodeFiles/templates/blog-post.php?blogid=<?php echo $blog['blog_id']; ?>">
            <div class="sub_blog--card">
                <div class="image_box">
                <img src="<?php echo '../../ProductImage/'.$blog['blog_media']; ?>" alt="blog_img" class="blog__img" width="100%">
                </div>
                <div class="content">
                    <h3 class="blog_title"><?php echo $blog['blog_name']; ?></h3>
                    <p class="blog_desc"><?php echo $blog['blog_description']; ?></p><br>
                    <p class="blog_author"><?php echo $blog['blog_author']; ?></p>
                    <p class="blog_date"><?php echo $blog['blog_date']; ?></p>
                </div>
            </div>
          </a>
        </div>
<?php
}
?>
    </div>
</main>
  


<?php
include '../../CodeFiles/config/footer.php';
?>
</body>
</html>