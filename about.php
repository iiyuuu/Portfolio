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
<!-- about section starts -->

<section class="about" id="about">

    <h1 class="heading"> <span>biography</span> </h1>

    <div class="biography">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dolore hic reiciendis eveniet eos cum fugit minima sed quam cumque.</p>

        <div class="bio">
            <h3> <span> name : </span> Nathan Nguyen </h3> 
            <h3> <span> email : </span> insert email here </h3> 
            <h3> <span> address : </span> insert address here </h3> 
            <h3> <span> phone : </span> insert phone here </h3> 
            <h3> <span> age : </span> insert age here </h3> 
            <h3> <span> experience : </span> insert experience here </h3>    
        </div>

        <a href="#" class="btn"> download CV</a>

    </div>

    <div class="skills">

        <h1 class="heading"> <span>Skills</span></h1>

        <div class="progress">
            <div class="bar"> <h3><span class="skill">Python</span> </h3></div>
            <div class="bar"> <h3><span class="skill">Clickhouse</span> </h3></div>
            <div class="bar"> <h3><span class="skill">MYSQL</span> </h3></div>
            <div class="bar"> <h3><span class="skill">PHP</span> </h3></div>
            <div class="bar"> <h3><span class="skill">HTML</span> </h3></div>
            <div class="bar"> <h3><span class="skill">CSS</span> </h3></div>
        </div>

    </div>


    <div class="edu-exp">
        <h1 class="heading"><span>education & experience</span></h1>

        <div class="row">
            <div class="box-container">

                <h3 class="title">experience</h3>

                <div class="box">
                    <span>( 2023 - present )</span>
                    <h3>Data Analyst</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non adipisci debitis doloribus repellat, eligendi itaque?</p>
                </div>
            
            </div>

            <div class="box-container">

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

<!-- about section ends -->

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>