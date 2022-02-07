<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image.png" href="./images/icone.png">
    <link rel="stylesheet" href="style.css">
    <title>Profil - Client</title>
</head>
<body>
    <?php 
        include_once("header.php");
    ?>
    <div class="fakeheader"></div>
    <?php
        include_once("categories.php");
    ?>
    <div class="rdv">
        <?php 
            include("bdd.php");
            if(isset($_SESSION['id_cl']) && $_SESSION['id_cl'] > 0){
                $getid = intval($_SESSION['id_cl']);
                $profilc = $bd->prepare("SELECT * from client where id_cl = :id_cl");
                $result = $profilc->fetch();
        ?>
        <div class="bleu">
            <b class="nomc"><?php echo $_SESSION['nom_cl'] ."<br>". $_SESSION['prenom_cl']; ?></b>
            <button class="nomr"><a href="deconnexion.php" style="text-decoration: none; color: #5491f6;"><h2>Je me déconnecte</h2></a></button>
        </div>
        <div class="pad marg">
            <div class="ma">
                <h3 class="bl bot">Mes informations</h3>
                <p>E-mail : <?php echo $_SESSION['email_cl'] ?></p>
                <p>Tel : 0<?php echo $_SESSION['tel_cl'] ?></p>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php
        include_once("footer.php");
    ?>
</body>
</html>