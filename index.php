<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portolio Website</title>

    <!-- font cdl link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- aos css link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<!-- Navbar Section -->

<header class="header">

    <a class="logo">Portfolio</a>

    <button class="dark_mode_toggle" onclick="toggleDarMode()"></button>

    <nav class="side_menu">
        <a id="index_navbar" class="active" href="#home">home</a>
        <a id="about_navbar" class="active" href="#about">about</a>
        <a id="contact_navbar" class="active" href="#contact">contact</a>
    </nav>

    <!-- social media stuff -->
    <div class="follow">
        <a href="https://www.linkedin.com/in/nathan-nguyen-b3b662203/" class="fab fa-linkedin" target="_blank" rel="noreferrer noopener"></a>
        <a href="https://github.com/Gubagoo-Nathan-Nguyen" class="fab fa-github" target="_blank" rel="noreferrer noopener"></a>
    </div>

</header>

<!-- home section -->

<section class="home" id="home">
    <div class="image">
        <img src="images/user-img.jpg" alt="">
    </div>

    <div class="content" data-aos="fade-up" data-aos-duration="1600">
        <h3>Nathan Nguyen</h3>
        <!-- TODO: add location icon + location text -->
    </div>

</section>

<!-- Home section end -->

<!-- About section -->

<section class="about" id="about">

    <h1 class="heading" data-aos="fade-down" data-aos-anchor-placement="center-bottom" data-aos-once="true"> <span>about me</span> </h1>

    <div class="biography">
        <div class="bio"data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-once="true">
            <h3> <span> preferred name : </span> Nathan Nguyen </h3> 
            <h3> <span> email : </span> nathan.nguyen9957@gmail.com </h3> 
            <h3> <span> phone : </span> 346-702-9329 </h3>   
        </div>

        <!-- TODO: Add experience and past projects section -->

        <!-- TODO: Add download link to resume -->
        <a href="/documents/toppers_schedule.txt" class="btn" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-once="true" download> Download Resume</a>

    </div>

    <div class="skills">

        <h1 class="heading" data-aos="fade-down" data-aos-anchor-placement="center-bottom" data-aos-once="true"> <span>Skills</span></h1>

        <div class="progress">
            <div class="bar" data-aos="fade-right" data-aos-once="true" data-aos-anchor-placement="center-bottom"> <h3><span class="skill">Python</span> </h3></div>
            <div class="bar" data-aos="fade-left" data-aos-once="true" data-aos-anchor-placement="center-bottom"> <h3><span class="skill">Clickhouse</span> </h3></div>
            <div class="bar" data-aos="fade-right" data-aos-once="true" data-aos-anchor-placement="center-bottom"> <h3><span class="skill">MYSQL</span> </h3></div>
            <div class="bar" data-aos="fade-left" data-aos-once="true" data-aos-anchor-placement="center-bottom"> <h3><span class="skill">PHP</span> </h3></div>
            <div class="bar" data-aos="fade-right" data-aos-once="true" data-aos-anchor-placement="center-bottom"> <h3><span class="skill">HTML</span> </h3></div>
            <div class="bar" data-aos="fade-left" data-aos-once="true" data-aos-anchor-placement="center-bottom"> <h3><span class="skill">CSS</span> </h3></div>
        </div>

    </div>


    <div class="edu-exp">
        <h1 class="heading" data-aos="fade-down" data-aos-anchor-placement="center-bottom" data-aos-once="true"><span>education & experience</span></h1>

        <div class="row">
            <div class="box-container" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-once="true">

                <h3 class="title">experience</h3>

                <div class="box">
                    <span>( 2023 - present )</span>
                    <h3>Data Analyst</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non adipisci debitis doloribus repellat, eligendi itaque?</p>
                </div>

                <div class="box">
                    <span>( 2024 - present )</span>
                    <h3>Full Stack Software Developer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non adipisci debitis doloribus repellat, eligendi itaque?</p>
                </div>
            
            </div>

            <div class="box-container" data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-once="true">

                <h3 class="title">education</h3>

                <div class="box">
                    <span>( 2018 - 2022 )</span>
                    <h3>University of Houston</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non adipisci debitis doloribus repellat, eligendi itaque?</p>
                </div>

            </div>
        </div>
    </div>


</section>

<!-- About section end -->

<!-- Contact section start -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact me</span></h1>

    <form action="" method="post">
        <div class="flex">
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
        </div>
        <input type="tel" id="phone" name="number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="enter your number" class="box" required>
        <textarea name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
        
        <input type="submit" value="send message" name="send" class="btn">
    </form>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>+123-456-7890</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>name@domain.com</p>
        </div>

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <p>[insert address here]</p>
        </div>



    </div>


</section>    


<div class="credit"> &copy; copyright  @<?php echo date('Y'); ?> by <span> [insert company name here]</span></div>


<!-- Contact section end -->

<!-- custom js file link -->
<script src="js/script.js"></script>
<script src="js/windowConfig.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init({
    duration: 800,
    delay: 300
});</script>

</body>
</html>