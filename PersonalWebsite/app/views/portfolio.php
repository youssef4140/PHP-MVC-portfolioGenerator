<?php 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youssef's Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/portfolio.css">
</head>

<body>
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#home" class="logo">Portfolio</a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <!-- <a href="#portfolio">portfolio</a> -->
            <!-- <a href="#contact">contact</a> -->
        </nav>
        <div class="follow">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </header>
    <section class="home" id="home">
        <div class="image" data-aos="fade-right">
            <img src=<?= $personal_info['img']?> alt="me">
        </div>
        <div class="content" >
            <h3 data-aos="fade-up">Name is <?= $personal_info['lastname']?>, <?= $personal_info['firstname']?> <?=$personal_info['lastname']?>.</h3>
            <span data-aos="fade-up"><?= $personal_info['jobtitle']?></span>
            <p data-aos="fade-up"><?= $personal_info['objective']?></p>
            <a data-aos="fade-up" href="#about" class="btn">about me</a>
        </div>
    </section>

    <section class="about" id="about">
        <h1 class="heading" data-aos="fade-up"><span>biography</span></h1>
        <div class="biography" >
            <p data-aos="fade-up"><?= $personal_info['biography']?>
            </p>
            <div class="bio">
                <h3 data-aos="zoom-in"><span>name: </span><?= $personal_info['lastname']?> <?= $personal_info['firstname']?> </h3>
                <h3 data-aos="zoom-in"><span>email: </span><?= $personal_info['email']?></h3>
                <h3 data-aos="zoom-in"><span>address: </span><?= $personal_info['address']?></h3>
                <h3 data-aos="zoom-in"><span>phone: </span><?= $personal_info['phone']?></h3>
                <h3 data-aos="zoom-in"><span>age: </span><?= $personal_info['age']?></h3>
                <h3 data-aos="zoom-in"><span>experience: </span><?= $personal_info['experiencetime']?></h3>
            </div>
            <a data-aos="flip-up" href="#">download CV</a>
        </div>

        <div class="skills">
            <h1 class="heading"><span>skills</span></h1>
            <div class="progress">
                <?php 
                foreach($skills as $skill){
                    echo '<h3 data-aos="flip-up"><span>'.$skill.'</span></h3>';
                }
                    ?>
                <!-- <h3 data-aos="flip-up"><span>HTML</span></h3>
                <h3 data-aos="flip-up"><span>CSS</span></h3>
                <h3 data-aos="flip-up"><span>JavaScript</span></h3>
                <h3 data-aos="flip-up"><span>PHP</span></h3> -->
            </div>
        </div>
        <div class="edu-exp">
            <h1 class="heading"><span>education & experience</span></h1>

            <div class="row">
            <?php 
                foreach($experience as $e){
                    echo'<div class="box-container" data-aos="zoom-out-up">
                    <h3 class="title">'.$e['jobtitle'].'</h3>
                    <div class="box">
                        <span>'.$e['date'].'</span>
                        <h3>'.$e['location'].'</h3>
                        <p>'.$e['description'].'
                        </p>
                    </div>
                </div>';
                }
                    ?>
                <!-- <div class="box-container" data-aos="zoom-out-up">
                    <h3 class="title">education</h3>
                    <div class="box">
                        <span>(2019-2020)</span>
                        <h3>web designer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ab voluptatibus illum, rem ullam beatae labore dolore.
                            Nisi, perspiciatis ea fugit quaerat quas aspernatur.
                            Obcaecati praesentium, ipsam aliquid perferendis delectus voluptates.
                        </p>
                    </div>
                </div>
                <div class="box-container" data-aos="zoom-out-up">
                    <h3 class="title">education</h3>
                    <div class="box">
                        <span>(2019-2020)</span>
                        <h3>web designer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ab voluptatibus illum, rem ullam beatae labore dolore.
                            Nisi, perspiciatis ea fugit quaerat quas aspernatur.
                            Obcaecati praesentium, ipsam aliquid perferendis delectus voluptates.
                        </p>
                    </div>
                </div>
                <div class="box-container" data-aos="zoom-out-up">
                    <h3 class="title">education</h3>
                    <div class="box">
                        <span>(2019-2020)</span>
                        <h3>web designer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ab voluptatibus illum, rem ullam beatae labore dolore.
                            Nisi, perspiciatis ea fugit quaerat quas aspernatur.
                            Obcaecati praesentium, ipsam aliquid perferendis delectus voluptates.
                        </p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <section class="services" id="services">

        <h1 class="heading"><span>services</span></h1>
        <div class="box-container">
        <?php 
                foreach($services as $s){
                    echo'<div class="box" data-aos="fade-up">      
                    <i class="fas fa-code"></i>
                        <h3>'.$s['service'].'</h3>
                        <p>'.$s['description'].'
                        </p>
                </div>';
                }
                    ?>
            <!-- <div class="box" data-aos="fade-up">      
                <i class="fas fa-code"></i>
                    <h3>web development</h3>
                    <p>Lorem ipsum dolor sit,amet consectetur adipisicing elit.
                        Debitis vitae dignissimos consequatur sed fugiat,
                        quia odio maiores molestias rerum unde natus voluptatem delectus dolorum?
                        Nemo sed dolore repellendus corrupti veniam?
                    </p>
            </div>
            <div class="box" data-aos="fade-up">      
                <i class="fas fa-paint-brush"></i>
                    <h3>web development</h3>
                    <p>Lorem ipsum dolor sit,amet consectetur adipisicing elit.
                        Debitis vitae dignissimos consequatur sed fugiat,
                        quia odio maiores molestias rerum unde natus voluptatem delectus dolorum?
                        Nemo sed dolore repellendus corrupti veniam?
                    </p>
            </div>
            <div class="box" data-aos="fade-up">      
                <i class="fas fa-bootstrap"></i>
                    <h3>web development</h3>
                    <p>Lorem ipsum dolor sit,amet consectetur adipisicing elit.
                        Debitis vitae dignissimos consequatur sed fugiat,
                        quia odio maiores molestias rerum unde natus voluptatem delectus dolorum?
                        Nemo sed dolore repellendus corrupti veniam?
                    </p>
            </div> -->
        </div>
    </section>
<!-- <section class="portfolio" id="portfolio">
    <h1 class="heading"><span>portfolio</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="" alt="">
        </div>
    </div>
</section> -->

<script src="/public/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init({
        duration:400,
        delay:100
    })
    </script>
</body>

</html>