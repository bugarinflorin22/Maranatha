<?php 
include_once '../php/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/galerie.css">
    <title> Laborator de Cofetarie si Patiserie Franceza Maranatha </title>
</head>

<header>

    <div class="logo">
        <a href="/">
            <embed class="emb" src="../images/logo/logo.svg">
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
            <li><a href="../produse"> Produse </a></li>
            <li><a href="../galerie"> Galerie </a></li>
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
            <li><a href="../produse"> Produse </a></li>
            <li><a href="../galerie"> Galerie </a></li>
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

    <div class="galerie" id="galerie">
        <div class="galerie-title" style="position: relative; z-index: 3;"> 
            <p class="thetitle"> Torturi </p>
            <i class="fas fa-chevron-circle-down"></i>
            <i class="fas fa-chevron-circle-up" style="display: none;"></i>
        </div>
        <div class="drop-down-galerie" style="top: -350px; opacity: 0; z-index: 2;">
            <p>Torturi</p>
            <p>Prăjituri</p>
            <p>Macarons</p>
            <p>Cup-cakes</p>
            <p>Pop-cakes și acadele</p>
            <p>Cakes</p>
            <p>Biscuiți</p>
            <p>Cozonac</p>
            <p>Figurine</p>
            <p>Sărățele</p>
        </div>
        <div class="galerie-content" style="z-index: 1;">
            <span class="torturi">
                <?php
                include '../php/new_select.php';
                while($row = $stmt->fetch()){ 
                    if($row->tip == 'tort') { echo '<img onclick="open_zoom('; echo $row->v; echo'); " src="'; echo $row->img; echo '">'; }
                }
                ?>
            </span>
        </div>
    </div>

    <div class="zoomimg" id="mySwipe">
        <div class="zoomimgs">
            <div class="zimg">
                <img class="imgid" src="../images/descriere1.jpg" alt="">
            </div>
           <div class="zimg">
                <img class="imgid" src="../images/descriere2.jpg" alt="">
            </div>
            <div class="zimg">
                <img class="imgid" src="../images/descriere3.jpg" alt="">
            </div>
            <div class="zimg">
                <img class="imgid" src="../images/descriere4.jpg" alt="">
            </div>
            <div class="zimg">
                <img class="imgid" src="../images/descriere5.jpg" alt="">
            </div>
        </div>
        <div class="zoomcontrols">
            <i onclick="swipe_left();" class="fas fa-chevron-left"></i>
            <i onclick="close_zoom();" class="far fa-window-close"></i>
            <i onclick="swipe_right();" class="fas fa-chevron-right"></i>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/galerie.js"></script>
    <script src="../js/header.js"></script>

    <footer>
        <p> labmaranatha.com 2020 © toate drepturile rezervate. </p>
    </footer>

</body>

</html>