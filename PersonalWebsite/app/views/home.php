
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/public/css/add.css">

</head>

<body>
    <header class="header">


        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#home" class="logo">Generated Portfolios</a>
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


    <section class="forms-container">
        <h1>Personal information</h1>
        <form action="/home" method="post">
            <div class="personal-info">
                <div class="form-field">
                    <label for="first-name">First name</label>
                    <input type="text" name="first-name" id="first-name" placeholder="Ex: Youssef">
                </div>
                <div class="form-field">
                    <label for="last-name">Last name</label>
                    <input type="text" name="last-name" id="last-name" placeholder="Ex: Metwally">
                </div>
                <div class="form-field">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Ex: Youssef5454">
                </div>
                <div class="form-field">
                    <label for="image-url">Image URL</label>
                    <input type="text" name="image-url" id="image-url" placeholder="Ex: https://picsum.photos/400/600">
                </div>
                <div class="form-field">
                    <label for="job-title">Job title</label>
                    <input type="text" name="job-title" id="job-title" placeholder="Ex: Web developer">
                </div>

                <div class="form-field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Ex: Youssef@Gmail.com">
                </div>
                <div class="form-field">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" placeholder="Ex: 21st Elm Str.">
                </div>
                <div class="form-field">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" placeholder="Ex: 43434334343">
                </div>
                <div class="form-field">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" placeholder="Ex: 2">
                </div>
                <div class="form-field">
                    <label for="experience-time">Experience time</label>
                    <input type="text" name="experience-time" id="experience-time" placeholder="3 years as a professional snoozer">
                </div>
                <div class="form-field">
                    <label for="objective">Objective</label>
                    <textarea type="text" name="objective" id="objective" rows="5" cols="50" placeholder="Ex: get an internship etc..."></textarea>
                </div>
                <div class="form-field">
                    <label for="biography">Biography</label>
                    <textarea name="biography" id="biography" rows="5" cols="50" placeholder="Ex: A tech enthusiast with a knack for learning etc.."></textarea>
                </div>
            </div>
            <input class="submit" name="personalInfo" type="submit" value="Submit">
        </form> <br>

        <h1>Experience</h1>
        <form action="/submit" method="post">
            <div class="personal-info">
                <div class="form-field">
                    <label for="job">Job title</label>
                    <input type="text" name="job" id="job" placeholder="Ex: Web designer">
                </div>
                <div class="form-field">
                    <label for="date">Date</label>
                    <input type="text" name="date" id="date" placeholder="Ex: (2019 - 2020)">
                </div>
                <div class="form-field">
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location" placeholder="Ex: Berlin">
                </div>
                <div class="form-field">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="description" placeholder="Ex: Was responsible for building responsive etc.."></textarea>
                </div>
            </div>
            <input class="submit" type="submit" value="Add Experience">
        </form>
        <hr>
        <h1>Services</h1>
        <form action="/submit" method="post">
            <div class="personal-info">
                <div class="form-field">
                    <label for="service">Service</label>
                    <input type="text" name="service" id="service" placeholder="Ex: ui/ux">
                </div>
                <div class="form-field">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" placeholder="Ex: Will design websites in figma">
                </div>
            </div>
            <input class="submit" type="submit" value="Add Service">
        </form>
        <hr>
        <h1>Skills</h1>
        <form action="/submit" method="post">
            <div class="personal-info">
                <div class="form-field">
                    <label for="skills">Skills</label>
                    <input type="text" name="skills" id="skills" placeholder="Ex: Html">
                </div>
            </div>
            <input class="submit" type="submit" value="Add Skill">
        </form>
        <hr>
        <input class="submit" type="submit" value="Generate Portfolio">


    </section>
    </div>
    <script src="/public/js/script.js"></script>

</body>

</html>