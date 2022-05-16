<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <title> Laborator de Cofetarie si Patiserie Franceza Maranatha </title>
</head>

<header>

    <div class="logo">
        <a href="/">
            <embed class="emb" src="images/logo/logo.svg">
        </a>
    </div>
    <div class="links">
        <div class="extra-header">
            <p>
                <a href="mailto: florin_bugarin@yahoo.com" style="text-decoration: none; color: black;"><i
                        style="color: rgb(202, 57, 202)" class="fas fa-envelope"></i> E-mail - contact@maranatha.com
                </a>
                <a href="tel:+40711251255" style="text-decoration: none; color: black;"><i style="color: #fa9197"
                        class="fas fa-mobile-alt"></i> Număr telefon - 0770.253.619 </a>

    </div>
        <ul>
            <li><a href="/"> Acasă </a></li>
            <li><a href="produse"> Produse </a></li>
            <li><a href="galerie"> Galerie </a></li>
            <li><a href="#"> Despre </a></li>
            <li><a href="#"> Contact </a></li>
        </ul>
    </div>
    <div class="mobile-links">
        <i class="fas fa-bars" onclick="open_menu();"></i>
    </div>
    <div class="mobile-drop-down">
        <ul>
            <li><a href="/"> Acasă </a></li>
            <li><a href="produse"> Produse </a></li>
            <li><a href="galerie"> Galerie </a></li>
            <li><a href="#"> Despre </a></li>
            <li><a href="#"> Contact </a></li>
            <li><i onclick="close_menu();" style="font-size: 1.5rem; margin-top: 25%; color: white;"
                    class="fas fa-times-circle"></i></li>
        </ul>
    </div>

</header>

<body>

    <h1 class="title"> Cofetăria Maranatha </h1>
    <hr class="title-hr">

    <div class="front-img">
        <div class="imagine">
            <img id="imagine" src="images/descriere1.jpg" alt="tort.png">
        </div>
        <div class="descriere">
            <p class="img-title"></p>
            <p id="descriere"></p>
        </div>
    </div>

    <hr class="after-title-hr">
    <div class="selectie">
        <div class="box">
            <div class="box-hover" style="display: none;">
                <i class="fas fa-search"></i>
            </div>
            <img src="images/selectie/torturi.jpg">
            <p> Torturi </p>
        </div>
        <div class="box">
            <div class="box-hover" style="display: none;">
                <i class="fas fa-search"></i>
            </div>
            <img src="images/selectie/prajituri.jpg">
            <p> Prăjituri </p>
        </div>
        <div class="box">
            <div class="box-hover" style="display: none;">
                <i class="fas fa-search"></i>
            </div>
            <img src="images/selectie/macarons.jpg">
            <p> Macarons </p>
        </div>
        <div class="box">
            <div class="box-hover" style="display: none;">
                <i class="fas fa-search"></i>
            </div>
            <img src="images/selectie/cup-cakes.jpg">
            <p> Cup-cakes </p>
        </div>
        <div class="box">
            <div class="box-hover" style="display: none;">
                <i class="fas fa-search"></i>
            </div>
            <img src="images/selectie/acadele.jpg">
            <p> Pop-cakes și acadele </p>
        </div>
        <div class="box">
            <div class="box-hover" style="display: none;">
                <i class="fas fa-search"></i>
            </div>
            <img src="images/selectie/cakes.jpg">
            <p> Cakes </p>
        </div>
        <div class="box">
            <div class="box-hover" style="display: none;">
                <i class="fas fa-search"></i>
            </div>
            <img src="images/selectie/biscuiti.jpg">
            <p> Biscuiți </p>
        </div>
        <div class="box">
            <div class="box-hover" style="display: none;">
                <i class="fas fa-search"></i>
            </div>
            <img src="images/selectie/figurine.jpg">
            <p> Figurine </p>
        </div>
        <div class="box">
            <div class="box-hover" style="display: none;">
                <i class="fas fa-search"></i>
            </div>
            <img src="images/selectie/cozonac.jpg">
            <p> Cozonac </p>
        </div>
        <div class="box">
            <div class="box-hover" style="display: none;">
                <i class="fas fa-search"></i>
            </div>
            <img src="images/selectie/torturi.jpg">
            <p> Sărățele </p>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/slide.js"></script>
    <script src="js/box.js"></script>
    <script src="js/header.js"></script>

    <footer>
        <div class="info" id="info">
            <p id="infoid"> <a href="mailto: florin_bugarin@yahoo.com" style="text-decoration: none; color: black;"><i
                    style="color: rgb(202, 57, 202)" class="fas fa-envelope"></i> E-mail - contact@maranatha.com
            </a> <br>
            <a href="tel:+40711251255" style="text-decoration: none; color: black;"><i style="color: #fa9197"
                    class="fas fa-mobile-alt"></i> Număr telefon - 0711.251.255 </a> </p>
        </div>
        <p> labmaranatha.com 2020 © toate drepturile rezervate. </p>
    </footer>

</body>

</html>