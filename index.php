<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portolio Website</title>

    <!-- font cdl link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<?php include 'nav_menu.php'; ?>

<body>

<!-- home section -->

<section class="home" id="home">
    <div class="image">
        <img src="images/user-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>introduction message</h3>
        <span>Data Analyst</span>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio culpa nemo reiciendis dolores consequatur numquam?</p>
        <a href="/about.php" class="btn" <?=activateLink('/index.php')?> >about me</a>
    </div>

</section>

<!-- Home section end -->

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>