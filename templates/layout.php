<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcin Bilka | Junior Web Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="/public/css/main.css">
</head>
<body>
<header class="header" id="header">
    <div class="header__box">
        <div class="header__box-bg">
            <canvas class="header__box-bg-canvas" id="canvas"></canvas>
        </div>
        <div class="header__box-heading">
            <h1 class="header__box-heading-title">
                <span>M</span><span>A</span><span>R</span><span>C</span><span>I</span><span>N</span>
                <span>B</span><span>I</span><span>L</span><span>K</span><span>A</span>
            </h1>
            <p class="header__box-heading-text">Junior web developer</p>
        </div>
        <a class="header__box-link btn-special-animation" href="#about" type="button">View my work</a>
    </div>
</header>
<nav class="nav">
    <button class="nav__burger-btn">
        <div class="nav__burger-btn-box">
            <div class="nav__burger-btn-bars"></div>
        </div>
    </button>
    <div class="nav__items">
        <a href="#about" class="nav__item active">About</a>
        <a href="#skills" class="nav__item">Skills</a>
        <a href="#projects" class="nav__item">Projects</a>
        <a href="#education" class="nav__item">Education</a>
        <a href="#experience" class="nav__item">Experience</a>
        <a href="#contact" class="nav__item">Contact</a>

    </div>
</nav>
<main class="main">
    <?php
    require_once "templates/sections/about.php";
    require_once "templates/sections/skills.php";
    require_once "templates/sections/projects.php";
    require_once "templates/sections/educations.php";
    require_once "templates/sections/experiences.php";
    require_once "templates/sections/contact.php";
    ?>
    <footer class=".footer">
    </footer>
</main>
<script type="module" src="/public/js/header.js"></script>
<script src="/public/js/headerMove.js"></script>
<script src="/public/js/main.js"></script>
</body>
</html>
