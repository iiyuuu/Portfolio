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
        <a href="contact.php" <?=activateLink('/contact.php')?> >contact</a>
    </nav>

    <!-- social media stuff -->
    <div class="follow">
        <a href="https://www.linkedin.com/in/nathan-nguyen-b3b662203/" class="fab fa-linkedin" target="_blank" rel="noreferrer noopener"></a>
        <a href="https://github.com/Gubagoo-Nathan-Nguyen" class="fab fa-github" target="_blank" rel="noreferrer noopener"></a>
    </div>

</header>

<!-- header section end -->

</body>
</html>