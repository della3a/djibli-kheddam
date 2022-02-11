<!-- ;==========================================
     ; Title:  Djibli Kheddam project
     ; Author: Manel Kheffache, Anais Tinhinane Amara, Kenza Benbouabdellah & Bilal Si Said 
     ; Date:   1 Jul 2020
     ;========================================== -->
     
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image.png" href="./images/icone.png">
    <link rel="stylesheet" href="style.css">
    <title></title>
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
<div class="ligne wrap">
    <?php
        if(isset($_POST['carreleur'])){
            global $bd;
            $artisan = $bd ->query('SELECT * from artisan where metier="carreleur"');
            while($art=$artisan->fetch()){ ?>
            <div class="carte">
                <div class="bleu1">
                    <img src="./<?php echo $art['image_art'] ?>" class="contour1">
                    <b class="nom"><a href="profil_artisan.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: white;"><?php echo $art['nom_art'] ."<br>". $art['prenom_art'] ?></a></b>
                    <button class="z"><a href="rdv.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: #5491f6;"><h3>Prendre rendez-vous</h3></a></button>
                </div>
                <div class="flex espace">
                    <div class="larg">
                        <h3 class="contact to"><?php echo $art['metier'] ?></h3>
                        <h4 class="contact to">Experience<br><?php echo $art['annees_exp'] ?> ans</h4>
                    </div>
                    <div class="wid">
                        <h4 class="titre bot to">Contact</h4>
                        <p class="contact">Tel : 0<?php echo $art['tel_art'] ?></p>
                        <p class="contact">E-mail : <?php echo $art['email_art'] ?></p>
                        <div class="">
                            <div class="ligne">
                                <img src="./images/adresse.png" class="pu">
                                <h4 class="titre bot to">Adresse</h4>
                            </div>
                            <p class="contact"><?php echo $art['adresse_art'] ?></p>
                            <p class="contact">Wilaya : <?php echo $art['wilaya_art'] ?></p>
                        </div>
                        <h4 class="titre bot to">Prix</h4>
                        <p class="contact"><?php echo $art['tarifs'] ?> DA</p>
                        <h4 class="titre bot to">Description</h4>
                        <p class="contact"><?php echo $art['description'] ?></p>
                    </div>
                </div>
            </div>
    <?php } } ?>
    <?php
        if(isset($_POST['chauffagiste'])){
            global $bd;
            $artisan = $bd ->query('SELECT * from artisan where metier="chauffagiste"');
            while($art=$artisan->fetch()){ ?>
            <div class="carte">
                <div class="bleu1">
                    <img src="./<?php echo $art['image_art'] ?>" class="contour1">
                    <b class="nom"><a href="profil_artisan.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: white;"><?php echo $art['nom_art'] ."<br>". $art['prenom_art'] ?></a></b>
                    <button class="z"><a href="rdv.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: #5491f6;"><h3>Prendre rendez-vous</h3></a></button>
                </div>
                <div class="flex espace">
                    <div class="larg">
                        <h3 class="contact to"><?php echo $art['metier'] ?></h3>
                        <h4 class="contact to">Experience<br><?php echo $art['annees_exp'] ?> ans</h4>
                    </div>
                    <div class="wid">
                        <h4 class="titre bot to">Contact</h4>
                        <p class="contact">Tel : 0<?php echo $art['tel_art'] ?></p>
                        <p class="contact">E-mail : <?php echo $art['email_art'] ?></p>
                        <div class="">
                            <div class="ligne">
                                <img src="./images/adresse.png" class="pu">
                                <h4 class="titre bot to">Adresse</h4>
                            </div>
                            <p class="contact"><?php echo $art['adresse_art'] ?></p>
                            <p class="contact">Wilaya : <?php echo $art['wilaya_art'] ?></p>
                        </div>
                        <h4 class="titre bot to">Prix</h4>
                        <p class="contact"><?php echo $art['tarifs'] ?> DA</p>
                        <h4 class="titre bot to">Description</h4>
                        <p class="contact"><?php echo $art['description'] ?></p>
                    </div>
                </div>
            </div>
    <?php } } ?>
    <?php
        if(isset($_POST['electricien'])){
            global $bd;
            $artisan = $bd ->query('SELECT * from artisan where metier="electricien"');
            while($art=$artisan->fetch()){ ?>
            <div class="carte">
                <div class="bleu1">
                    <img src="./<?php echo $art['image_art'] ?>" class="contour1">
                    <b class="nom"><a href="profil_artisan.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: white;"><?php echo $art['nom_art'] ."<br>". $art['prenom_art'] ?></a></b>
                    <button class="z"><a href="rdv.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: #5491f6;"><h3>Prendre rendez-vous</h3></a></button>
                </div>
                <div class="flex espace">
                    <div class="larg">
                        <h3 class="contact to"><?php echo $art['metier'] ?></h3>
                        <h4 class="contact to">Experience<br><?php echo $art['annees_exp'] ?> ans</h4>
                    </div>
                    <div class="wid">
                        <h4 class="titre bot to">Contact</h4>
                        <p class="contact">Tel : 0<?php echo $art['tel_art'] ?></p>
                        <p class="contact">E-mail : <?php echo $art['email_art'] ?></p>
                        <div class="">
                            <div class="ligne">
                                <img src="./images/adresse.png" class="pu">
                                <h4 class="titre bot to">Adresse</h4>
                            </div>
                            <p class="contact"><?php echo $art['adresse_art'] ?></p>
                            <p class="contact">Wilaya : <?php echo $art['wilaya_art'] ?></p>
                        </div>
                        <h4 class="titre bot to">Prix</h4>
                        <p class="contact"><?php echo $art['tarifs'] ?> DA</p>
                        <h4 class="titre bot to">Description</h4>
                        <p class="contact"><?php echo $art['description'] ?></p>
                    </div>
                </div>
            </div>
    <?php } } ?>
    <?php
        if(isset($_POST['ferronier'])){
            global $bd;
            $artisan = $bd ->query('SELECT * from artisan where metier="ferronier"');
            while($art=$artisan->fetch()){ ?>
            <div class="carte">
                <div class="bleu1">
                    <img src="./<?php echo $art['image_art'] ?>" class="contour1">
                    <b class="nom"><a href="profil_artisan.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: white;"><?php echo $art['nom_art'] ."<br>". $art['prenom_art'] ?></a></b>
                    <button class="z"><a href="rdv.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: #5491f6;"><h3>Prendre rendez-vous</h3></a></button>
                </div>
                <div class="flex espace">
                    <div class="larg">
                        <h3 class="contact to"><?php echo $art['metier'] ?></h3>
                        <h4 class="contact to">Experience<br><?php echo $art['annees_exp'] ?> ans</h4>
                    </div>
                    <div class="wid">
                        <h4 class="titre bot to">Contact</h4>
                        <p class="contact">Tel : 0<?php echo $art['tel_art'] ?></p>
                        <p class="contact">E-mail : <?php echo $art['email_art'] ?></p>
                        <div class="">
                            <div class="ligne">
                                <img src="./images/adresse.png" class="pu">
                                <h4 class="titre bot to">Adresse</h4>
                            </div>
                            <p class="contact"><?php echo $art['adresse_art'] ?></p>
                            <p class="contact">Wilaya : <?php echo $art['wilaya_art'] ?></p>
                        </div>
                        <h4 class="titre bot to">Prix</h4>
                        <p class="contact"><?php echo $art['tarifs'] ?> DA</p>
                        <h4 class="titre bot to">Description</h4>
                        <p class="contact"><?php echo $art['description'] ?></p>
                    </div>
                </div>
            </div>
    <?php } } ?>
    <?php
        if(isset($_POST['jardinier'])){
            global $bd;
            $artisan = $bd ->query('SELECT * from artisan where metier="jardinier"');
            while($art=$artisan->fetch()){ ?>
            <div class="carte">
                <div class="bleu1">
                    <img src="./<?php echo $art['image_art'] ?>" class="contour1">
                    <b class="nom"><a href="profil_artisan.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: white;"><?php echo $art['nom_art'] ."<br>". $art['prenom_art'] ?></a></b>
                    <button class="z"><a href="rdv.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: #5491f6;"><h3>Prendre rendez-vous</h3></a></button>
                </div>
                <div class="flex espace">
                    <div class="larg">
                        <h3 class="contact to"><?php echo $art['metier'] ?></h3>
                        <h4 class="contact to">Experience<br><?php echo $art['annees_exp'] ?> ans</h4>
                    </div>
                    <div class="wid">
                        <h4 class="titre bot to">Contact</h4>
                        <p class="contact">Tel : 0<?php echo $art['tel_art'] ?></p>
                        <p class="contact">E-mail : <?php echo $art['email_art'] ?></p>
                        <div class="">
                            <div class="ligne">
                                <img src="./images/adresse.png" class="pu">
                                <h4 class="titre bot to">Adresse</h4>
                            </div>
                            <p class="contact"><?php echo $art['adresse_art'] ?></p>
                            <p class="contact">Wilaya : <?php echo $art['wilaya_art'] ?></p>
                        </div>
                        <h4 class="titre bot to">Prix</h4>
                        <p class="contact"><?php echo $art['tarifs'] ?> DA</p>
                        <h4 class="titre bot to">Description</h4>
                        <p class="contact"><?php echo $art['description'] ?></p>
                    </div>
                </div>
            </div>
    <?php } } ?>
    <?php
        if(isset($_POST['macon'])){
            global $bd;
            $artisan = $bd ->query('SELECT * from artisan where metier="macon"');
            while($art=$artisan->fetch()){ ?>
            <div class="carte">
                <div class="bleu1">
                    <img src="./<?php echo $art['image_art'] ?>" class="contour1">
                    <b class="nom"><a href="profil_artisan.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: white;"><?php echo $art['nom_art'] ."<br>". $art['prenom_art'] ?></a></b>
                    <button class="z"><a href="rdv.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: #5491f6;"><h3>Prendre rendez-vous</h3></a></button>
                </div>
                <div class="flex espace">
                    <div class="larg">
                        <h3 class="contact to"><?php echo $art['metier'] ?></h3>
                        <h4 class="contact to">Experience<br><?php echo $art['annees_exp'] ?> ans</h4>
                    </div>
                    <div class="wid">
                        <h4 class="titre bot to">Contact</h4>
                        <p class="contact">Tel : 0<?php echo $art['tel_art'] ?></p>
                        <p class="contact">E-mail : <?php echo $art['email_art'] ?></p>
                        <div class="">
                            <div class="ligne">
                                <img src="./images/adresse.png" class="pu">
                                <h4 class="titre bot to">Adresse</h4>
                            </div>
                            <p class="contact"><?php echo $art['adresse_art'] ?></p>
                            <p class="contact">Wilaya : <?php echo $art['wilaya_art'] ?></p>
                        </div>
                        <h4 class="titre bot to">Prix</h4>
                        <p class="contact"><?php echo $art['tarifs'] ?> DA</p>
                        <h4 class="titre bot to">Description</h4>
                        <p class="contact"><?php echo $art['description'] ?></p>
                    </div>
                </div>
            </div>
    <?php } } ?>
    <?php
        if(isset($_POST['peintre'])){
            global $bd;
            $artisan = $bd ->query('SELECT * from artisan where metier="peintre"');
            while($art=$artisan->fetch()){ ?>
            <div class="carte">
                <div class="bleu1">
                    <img src="./<?php echo $art['image_art'] ?>" class="contour1">
                    <b class="nom"><a href="profil_artisan.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: white;"><?php echo $art['nom_art'] ."<br>". $art['prenom_art'] ?></a></b>
                    <button class="z"><a href="rdv.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: #5491f6;"><h3>Prendre rendez-vous</h3></a></button>
                </div>
                <div class="flex espace">
                    <div class="larg">
                        <h3 class="contact to"><?php echo $art['metier'] ?></h3>
                        <h4 class="contact to">Experience<br><?php echo $art['annees_exp'] ?> ans</h4>
                    </div>
                    <div class="wid">
                        <h4 class="titre bot to">Contact</h4>
                        <p class="contact">Tel : 0<?php echo $art['tel_art'] ?></p>
                        <p class="contact">E-mail : <?php echo $art['email_art'] ?></p>
                        <div class="">
                            <div class="ligne">
                                <img src="./images/adresse.png" class="pu">
                                <h4 class="titre bot to">Adresse</h4>
                            </div>
                            <p class="contact"><?php echo $art['adresse_art'] ?></p>
                            <p class="contact">Wilaya : <?php echo $art['wilaya_art'] ?></p>
                        </div>
                        <h4 class="titre bot to">Prix</h4>
                        <p class="contact"><?php echo $art['tarifs'] ?> DA</p>
                        <h4 class="titre bot to">Description</h4>
                        <p class="contact"><?php echo $art['description'] ?></p>
                    </div>
                </div>
            </div>
    <?php } } ?>
    <?php
        if(isset($_POST['plombier'])){
            global $bd;
            $artisan = $bd ->query('SELECT * from artisan where metier="plombier"');
            while($art=$artisan->fetch()){ ?>
            <div class="carte">
                <div class="bleu1">
                    <img src="./<?php echo $art['image_art'] ?>" class="contour1">
                    <b class="nom"><a href="profil_artisan.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: white;"><?php echo $art['nom_art'] ."<br>". $art['prenom_art'] ?></a></b>
                    <button class="z"><a href="rdv.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: #5491f6;"><h3>Prendre rendez-vous</h3></a></button>
                </div>
                <div class="flex espace">
                    <div class="larg">
                        <h3 class="contact to"><?php echo $art['metier'] ?></h3>
                        <h4 class="contact to">Experience<br><?php echo $art['annees_exp'] ?> ans</h4>
                    </div>
                    <div class="wid">
                        <h4 class="titre bot to">Contact</h4>
                        <p class="contact">Tel : 0<?php echo $art['tel_art'] ?></p>
                        <p class="contact">E-mail : <?php echo $art['email_art'] ?></p>
                        <div class="">
                            <div class="ligne">
                                <img src="./images/adresse.png" class="pu">
                                <h4 class="titre bot to">Adresse</h4>
                            </div>
                            <p class="contact"><?php echo $art['adresse_art'] ?></p>
                            <p class="contact">Wilaya : <?php echo $art['wilaya_art'] ?></p>
                        </div>
                        <h4 class="titre bot to">Prix</h4>
                        <p class="contact"><?php echo $art['tarifs'] ?> DA</p>
                        <h4 class="titre bot to">Description</h4>
                        <p class="contact"><?php echo $art['description'] ?></p>
                    </div>
                </div>
            </div>
    <?php } } ?>
    <?php
        if(isset($_POST['serrurier'])){
            global $bd;
            $artisan = $bd ->query('SELECT * from artisan where metier="serrurier"');
            while($art=$artisan->fetch()){ ?>
            <div class="carte">
                <div class="bleu1">
                    <img src="./<?php echo $art['image_art'] ?>" class="contour1">
                    <b class="nom"><a href="profil_artisan.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: white;"><?php echo $art['nom_art'] ."<br>". $art['prenom_art'] ?></a></b>
                    <button class="z"><a href="rdv.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: #5491f6;"><h3>Prendre rendez-vous</h3></a></button>
                </div>
                <div class="flex espace">
                    <div class="larg">
                        <h3 class="contact to"><?php echo $art['metier'] ?></h3>
                        <h4 class="contact to">Experience<br><?php echo $art['annees_exp'] ?> ans</h4>
                    </div>
                    <div class="wid">
                        <h4 class="titre bot to">Contact</h4>
                        <p class="contact">Tel : 0<?php echo $art['tel_art'] ?></p>
                        <p class="contact">E-mail : <?php echo $art['email_art'] ?></p>
                        <div class="">
                            <div class="ligne">
                                <img src="./images/adresse.png" class="pu">
                                <h4 class="titre bot to">Adresse</h4>
                            </div>
                            <p class="contact"><?php echo $art['adresse_art'] ?></p>
                            <p class="contact">Wilaya : <?php echo $art['wilaya_art'] ?></p>
                        </div>
                        <h4 class="titre bot to">Prix</h4>
                        <p class="contact"><?php echo $art['tarifs'] ?> DA</p>
                        <h4 class="titre bot to">Description</h4>
                        <p class="contact"><?php echo $art['description'] ?></p>
                    </div>
                </div>
            </div>
    <?php } } ?>
    <?php
        if(isset($_POST['vitrier'])){
            global $bd;
            $artisan = $bd ->query('SELECT * from artisan where metier="vitrier"');
            while($art=$artisan->fetch()){ ?>
            <div class="carte">
                <div class="bleu1">
                    <img src="./<?php echo $art['image_art'] ?>" class="contour1">
                    <b class="nom"><a href="profil_artisan.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: white;"><?php echo $art['nom_art'] ."<br>". $art['prenom_art'] ?></a></b>
                    <button class="z"><a href="rdv.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: #5491f6;"><h3>Prendre rendez-vous</h3></a></button>
                </div>
                <div class="flex espace">
                    <div class="larg">
                        <h3 class="contact to"><?php echo $art['metier'] ?></h3>
                        <h4 class="contact to">Experience<br><?php echo $art['annees_exp'] ?> ans</h4>
                    </div>
                    <div class="wid">
                        <h4 class="titre bot to">Contact</h4>
                        <p class="contact">Tel : 0<?php echo $art['tel_art'] ?></p>
                        <p class="contact">E-mail : <?php echo $art['email_art'] ?></p>
                        <div class="">
                            <div class="ligne">
                                <img src="./images/adresse.png" class="pu">
                                <h4 class="titre bot to">Adresse</h4>
                            </div>
                            <p class="contact"><?php echo $art['adresse_art'] ?></p>
                            <p class="contact">Wilaya : <?php echo $art['wilaya_art'] ?></p>
                        </div>
                        <h4 class="titre bot to">Prix</h4>
                        <p class="contact"><?php echo $art['tarifs'] ?> DA</p>
                        <h4 class="titre bot to">Description</h4>
                        <p class="contact"><?php echo $art['description'] ?></p>
                    </div>
                </div>
            </div>
    <?php } } ?>
</div>
    <?php
        include_once("footer.php");
    ?>
</body>
</html>