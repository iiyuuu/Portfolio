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


<?php 
    function activateLink($page)
    {
        if($_SERVER['REQUEST_URI'] == $page){
            return 'class="active"';
        }
    }
?>

<body>

<!-- header section -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#home" class="logo">Portfolio.</a>

    <nav class="navbar">
        <a href="index.php" <?=activateLink('/index.php')?> >home</a>
        <a href="about.php" <?=activateLink('/about.php')?> >about</a>
        <a href="#services">services</a>
        <a href="#portfolio">portfolio</a>
        <a href="#contact">contact</a>
    </nav>

    <!-- social media stuff -->
    <div class="follow">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-github"></a>
    </div>

</header>

<!-- header section end -->

</body>
</html>