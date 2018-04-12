<?php
session_start();

function m_header()
{
    ?>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <title>Modul'Or</title>
    </head>
    <body>
    <header class="header">
        <div class="headerLogo">
            <a href="#">
                <img src="assets/img/Logo.png" alt="">
            </a>
        </div>
        <div class="headerTitle">
            <h1>Modul<span class="gold">or</span></h1>
        </div>
        <?php if(!$_SESSION["log"] === false || !isset($_SESSION)) :?>
            <p>c'est conecteé frere <a href="./assets/include/logout.php">Deco</a> <a href="./assets/include/doCommand.php">passer command</a><a href="./assets/include/viewCommand.php">Mes commandes</a></p>
            <?php else : ?>
            <p><a href="./assets/include/log.php">connecte toi frere</a></p></p>
            <?php endif; ?>
        </p>
        <div class="burgerMenu">
            <div class="burgerMenuTop"></div>
            <div class="burgerMenuMid"></div>
            <div class="burgerMenuBottom"></div>
        </div>
    </header>
    <?php

}

function m_main()
{
    ?>
    <nav class="navMenu">
        <div class="closeCross">
            <div class="close"></div>
            <div class="close"></div>
        </div>
    </nav>

    <section class="section-1">
        <div class="videoContainer">
            <video class="video" src="" autoplay loop ></video>
            <a href="" class="discover">Découvrir</a>
        </div>

        <div class="scrollBtn">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>
    <section class="section" id="section-stand-choice">
        <div class="stand-choice">
            <h2 class="stand-title">Choisisser votre stand</h2>
            <div class="stand-selection">
                <div class="stand-size">
                    <p class="stand-text">9 M2</p>
                </div>
                <div class="stand-size">
                    <p class="stand-text">12 M2</p>
                </div>
                <div class="stand-size">
                    <p class="stand-text">18 M2</p>
                </div>
            </div>
            <div class="stand-unity"></div>
            <div class="stand-accept">
                <a class="stand-link" href="dwadad">Choisir cette taille</a>
            </div>
        </div>
    </section>
    <?php
}

function m_footer()
{
    ?>

    <form method="post" action="./assets/include/addUser.php">
        <input type="text" name="userName">
        <input type="text" name="f">
        <input type="text" name="adress">
        <input type="text" name="mail">
        <button type="submit">Valider</button>
    </form>
    <script src="./assets/js/main.js"></script>
    </body>
    </html>
    <?php

}
