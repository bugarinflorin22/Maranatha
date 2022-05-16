<?php session_start(); 
echo '<div class="lose_session" style:display:none;></div>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/produse.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <title> Laborator de Cofetarie si Patiserie Franceza Maranatha </title>
</head>

<header>

    <div class="logo">
        <a href="../">
            <embed class="emb" src="../images/logo/logo.svg">
        </a>
    </div>
    <div class="links">
        <div class="extra-header">
            <p> <i style="color: rgb(202, 57, 202)" class="fas fa-envelope"></i> E-mail - contact@maranatha.com <i
                    style="color: #fa9197" class="fas fa-mobile-alt"></i> Număr telefon - 0770.253.619
            </p>
        </div>
        <ul>
            <li><a href="/"> Acasă </a></li>
            <li><a href="produse"> Produse </a></li>
            <li><a href="../galerie"> Galerie </a></li>
            <li><a href="#"> Despre </a></li>
            <li><a href="#"> Contact </a></li>
        </ul>
    </div>

</header>

<body>

    <h1 class="title"> Cofetăria Maranatha </h1>
    <hr class="title-hr">

    <div class="filter">
        <div class="in-filter">
            <p> Categorie selectată </p>
            <select id="menu">
                <option value=".torturi"> Torturi </option>
                <option value=".prajituri"> Prăjituri </option>
                <option value=".macarons"> Macarons </option>
                <option value=".cup_cakes"> Cup-cakes </option>
                <option value=".acadele"> Pop-cakes și acadele </option>
                <option value=".cakes"> Cakes </option>
                <option value=".biscuiti"> Biscuiți </option>
                <option value=".cozonac"> Cozonac </option>
                <option value=".figurine"> Figurine </option>
                <option value=".saratele"> Sărățele </option>
            </select>
        </div>
    </div>
    <div style="display:none;" class="addtocard"></div>
    <?php require '../php/select.php';?>
    <div class="torturi">
        <?php while($row = $stmt->fetch()){ if($row->tip == 'tort') {?>
        <div class="boxes">
            <div class="in-boxes">
                <div class="in-boxes-img">
                    <a href="/produse/<?php echo $row->nume; ?>"><img class="zoom_img img_anim_reverse" src="<?php echo $row->img;?>"></a>
                </div>
                <p><?php echo $row->descriere;?></p>
            </div>
        </div>
        <?php }}?>
    </div>
    <?php require '../php/select.php';?>
    <div class="prajituri">
        <?php while($row = $stmt->fetch()){ if($row->tip == 'prajitura') {?>
        <div class="boxes">
            <div class="in-boxes">
                <div class="in-boxes-img">
                    <img class="zoom_img img_anim_reverse" src="<?php echo $row->img;?>">
                </div>
                <p><?php echo $row->descriere;?></p>
            </div>
        </div>
        <?php }}?>
    </div>
    <?php require '../php/select.php';?>        
    <div class="macarons">
        <?php while($row = $stmt->fetch()){ if($row->tip == 'macarons') {?>
        <div class="boxes">
            <div class="in-boxes">
                <div class="in-boxes-img">
                    <img class="zoom_img img_anim_reverse" src="<?php echo $row->img;?>">
                </div>
                <p><?php echo $row->descriere;?></p>
            </div>
        </div>
        <?php }}?>
    </div>
    <?php require '../php/select.php';?>        
    <div class="cup_cakes">
        <?php while($row = $stmt->fetch()){ if($row->tip == 'cup_cakes') {?>
        <div class="boxes">
            <div class="in-boxes">
                <div class="in-boxes-img">
                    <img class="zoom_img img_anim_reverse" src="<?php echo $row->img;?>">
                </div>
                <p><?php echo $row->descriere;?></p>
            </div>
        </div>
        <?php }}?>
    </div>
    <?php require '../php/select.php';?>        
    <div class="acadele">
        <?php while($row = $stmt->fetch()){ if($row->tip == 'acadele') {?>
        <div class="boxes">
            <div class="in-boxes">
                <div class="in-boxes-img">
                    <img class="zoom_img img_anim_reverse" src="<?php echo $row->img;?>">
                </div>
                <p><?php echo $row->descriere;?></p>
            </div>
        </div>
        <?php }}?>
    </div>
    <?php require '../php/select.php';?>
    <div class="cakes">
        <?php while($row = $stmt->fetch()){ if($row->tip == 'cakes') {?>
        <div class="boxes">
            <div class="in-boxes">
                <div class="in-boxes-img">
                    <img class="zoom_img img_anim_reverse" src="<?php echo $row->img;?>">
                </div>
                <p><?php echo $row->descriere;?></p>
            </div>
        </div>
        <?php }}?>
    </div>
    <?php require '../php/select.php';?>
    <div class="biscuiti">
        <?php while($row = $stmt->fetch()){ if($row->tip == 'biscuiti') {?>
        <div class="boxes">
            <div class="in-boxes">
                <div class="in-boxes-img">
                    <img class="zoom_img img_anim_reverse" src="<?php echo $row->img;?>">
                </div>
                <p><?php echo $row->descriere;?></p>
            </div>
        </div>
        <?php }}?>
    </div>
    <?php require '../php/select.php';?>
    <div class="cozonac">
        <?php while($row = $stmt->fetch()){ if($row->tip == 'cozonac') {?>
        <div class="boxes">
            <div class="in-boxes">
                <div class="in-boxes-img">
                    <img class="zoom_img img_anim_reverse" src="<?php echo $row->img;?>">
                </div>
                <p><?php echo $row->descriere;?></p>
            </div>
        </div>
        <?php }}?>
    </div>
    <?php require '../php/select.php';?>
    <div class="figurine">
        <?php while($row = $stmt->fetch()){ if($row->tip == 'figurine') {?>
        <div class="boxes">
            <div class="in-boxes">
                <div class="in-boxes-img">
                    <img class="zoom_img img_anim_reverse" src="<?php echo $row->img;?>">
                </div>
                <p><?php echo $row->descriere;?></p>
            </div>
        </div>
        <?php }}?>
    </div>
    <?php require '../php/select.php';?>
    <div class="saratele">
        <?php while($row = $stmt->fetch()){ if($row->tip == 'saratele') {?>
        <div class="boxes">
            <div class="in-boxes">
                <div class="in-boxes-img">
                    <img class="zoom_img img_anim_reverse" src="<?php echo $row->img;?>">
                </div>
                <p><?php echo $row->descriere;?></p>
            </div>
        </div>
        <?php }}?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/produse.js"></script>
    <script src="../js/header.js"></script>

</body>

</html>