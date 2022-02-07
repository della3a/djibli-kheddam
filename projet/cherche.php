<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image.png" href="./images/icone.png">
    <link rel="stylesheet" href="style.css">
    <title>Résultat de la recherche</title>
</head>
<body>
    <?php require("bdd.php"); ?>
    <?php 
        include_once("header.php");
    ?>
    <div class="fakeheader"></div>
    <?php
        include_once("categories.php");
    ?>
    <?php
        $recherche = $bd->query('SELECT wilaya_art from artisan');
            if(isset($_GET['wilaya']) && !empty($_GET['wilaya'])){
                $wilaya = htmlspecialchars($_GET['wilaya']);
                $recherche = $bd->query("SELECT * from artisan where wilaya_art like '%$wilaya%'");
                
            }
    ?>    
    <div class="ligne wrap">
        <?php while($r = $recherche->fetch()){ ?>
            <div class="carte">
                <div class="bleu1">
                    <img src="./<?php echo $r['image_art'] ?>" class="contour1">
                    <b class="nom"><a href="profil_artisan.php?id=<?php echo $r['id_art'] ?>" style="text-decoration: none; color: white;"><?php echo $r['nom_art'] ."<br>". $r['prenom_art'] ?></a></b>
                    <button class="z" name="rdv"><a href="rdv.php?id=<?php echo $r['id_art'] ?>" style="text-decoration: none; color: #5491f6;"><h3>Prendre rendez-vous</h3></a></button>
                </div>
                <div class="flex espace">
                    <div class="larg">
                        <h3 class="contact to"><?php echo $r['metier'] ?></h3>
                        <h4 class="contact to">Experience<br><?php echo $r['annees_exp'] ?> ans</h4>
                    </div>
                    <div class="wid">
                        <h4 class="titre bot to">Contact</h4>
                        <p class="contact">Tel : 0<?php echo $r['tel_art'] ?></p>
                        <p class="contact">E-mail : <?php echo $r['email_art'] ?></p>
                        <div class="">
                            <div class="ligne">
                                <img src="./images/adresse.png" class="pu">
                                <h4 class="titre bot to">Adresse</h4>
                            </div>
                            <p class="contact"><?php echo $r['adresse_art'] ?></p>
                            <p class="contact">Wilaya : <?php echo $r['wilaya_art'] ?></p>
                        </div>
                        <h4 class="titre bot to">Prix</h4>
                        <p class="contact"><?php echo $r['tarifs'] ?> DA</p>
                        <h4 class="titre bot to">Description</h4>
                        <p class="contact"><?php echo $r['description'] ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <?php
        include_once("footer.php");
    ?>
</body>
</html>