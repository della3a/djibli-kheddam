<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image.png" href="./images/icone.png">
    <link rel="stylesheet" href="style.css">
    <title>Profil - Artisan</title>
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
            if(isset($_SESSION['id_art']) && $_SESSION['id_art'] > 0){
                $getid = intval($_SESSION['id_art']);
                $profilc = $bd->prepare("SELECT * from artisan where id_art = (?)");
                $result = $profilc->fetch();
        ?>
        <div class="vert">
            <b class="noma"><?php echo $_SESSION['nom_art'] ."<br>". $_SESSION['prenom_art']; ?></b>
            <button class="nomr"><a href="deconnexion.php" style="text-decoration: none; color: #03bea7;"><h2>Je me déconnecte</h2></a></button>
        </div>
        <div class="situation2 pad">
            <div style="width: 30%;">
                <h3 class="contact" style="margin-bottom: 10px;"><?php echo $_SESSION['metier']; ?></h3>
                <h3 class="contact">Experience : <br><?php echo $_SESSION['annees_exp']; ?> ans</h3>
            </div>
            <div class="mar" style="width: 150%;">
                <div class="ma">
                    <h3 class="titre bot">Contact</h3>
                    <p>Tel : 0<?php echo $_SESSION['tel_art']; ?></p>
                    <p>E-mail : <?php echo $_SESSION['email_art']; ?></p>
                </div>
                <div class="ma">
                    <div class="ligne">
                        <img src="./images/adresse.png">
                        <h3 class="titre bot">Adresse</h3>
                    </div>
                    <p>Wilaya : <?php echo $_SESSION['wilaya_art']; ?></p>
                </div>
                <h3 class="titre bot">Description</h3>
                <p class="contact"><?php echo $_SESSION['description']; ?></p>
            </div>
        <?php } ?>
        </div>
    </div>
    <div style="margin-bottom: 35px;">
        <b class="titre bot" style="text-align:center;"><h1 style="margin-bottom: 25px;">Mes Rendez-Vous</h1><b> 
        <table class="tableau">
            <tr>
                <th>Date du RDV</th>
                <th>Nature des travaux</th>
                <th>Lieu du RDV</th>
            </tr>
        </table>
        <?php 
                global $bd;
                $rdv = $bd ->prepare('SELECT * from rdv where id_art = ?');
                $rdv->execute(array($getid));
                while($a = $rdv->fetch()){
            ?> 
            <table class="tableau">
                <tr>
                    <td><?php echo $a['date_rdv']; ?></td>
                    <td><?php echo $a['travail']; ?></td>
                    <td><?php echo $a['lieu']; ?> (<?php echo $a['adresse']; ?>)</td>
                </tr>
            </table>
        <?php } ?>
    </div>
    <?php
        include_once("footer.php");
    ?>
</body>
</html>