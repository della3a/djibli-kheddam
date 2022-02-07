<!DOCTYPE html>
<html lang="fr">
<head> 
    <meta charset="UTF-8">
    <link rel="icon" type="image.png" href="./images/icone.png">
    <link rel="stylesheet" href="style.css">
    <title>Djibli kheddam - Accueil</title>
</head>
<body>
    <?php include("bdd.php"); ?>
    <?php 
        include_once("header.php");
    ?>
    <div class="fakeheader"></div>
    <?php
        include_once("categories.php");
    ?>
    <div class="accueil">
        <div class="chercher">
            <h1 class="text">Exigez le meilleur pour <br>vos travaux !</h1>
            <br>
            <p class="text">Des professionnels en un clic pour tous vos travaux près de chez-vous</p>
            <br>
            <form method="GET" action="cherche.php" style="margin: 0px 108px;">
                <select name="wilaya" class="wilaya" required>
                    <option value="0">Wilaya</option>
                    <option value="adrar">01.Adrar</option>
                    <option value="chlef">02.Chlef</option>
                    <option value="bejaia">06.Béjaïa</option>
                    <option value="tamanrasset">11.Tamanrasset</option>
                    <option value="tebessa">12.Tébessa</option>
                    <option value="tlemcen">13.Tlemcen</option>
                    <option value="tiaret">14.Tiaret</option>
                    <option value="tiziouzou">15.Tizi-ouzou</option>
                    <option value="alger">16.Alger</option>
                    <option value="setif">19.Sétif</option>
                    <option value="skikda">21.Skikda</option>
                    <option value="constantine">25.Constantine</option>
                    <option value="medea">26.Médéa</option>
                    <option value="mslia">28.M’sila</option>
                    <option value="ouargla">30.Ouargla</option>
                    <option value="oran">31.Oran</option>
                    <option value="elbayedh">32.El Bayadh</option>
                    <option value="illizi">33.Illizi</option>
                    <option value="boumerdes">35.Boumerdès</option>
                    <option value="tindouf">37.Tindouf</option>
                    <option value="naama">45.Naâma</option>
                </select>
                <button class="cherche" name="cherche"><a href="recherche.php"><b>Je cherche mon artisan</b></a></button>
            </form>
        </div>
        <img src="./images/accueil/photo.png" class="photo">
    </div>
    <div class="marcher" id="m">
        <h1 class="text">Comment ça marche, Djibli Kheddam ?</h1>
        <div>
            <img src="./images/accueil/1.png" class="marche" id="marche1">
            <img src="./images/accueil/2.png" class="marche" id="marche2">
            <img src="./images/accueil/3.png" class="marche" id="marche3">
            <img src="./images/accueil/4.png" class="marche" id="marche4">
        </div>
    </div>
    <div class="histoires"  id="h">
        <h1 class="textv">Notre histoire - Qui sommes-nous ?</h1>
        <br>
        <p style="font-size: 22px; text-align: justify; margin: 25px 0px;">
        DjibliKheddam est une plateforme algérienne
        de mise en contact d'artisans avec des
        personnes ayant besoins de leurs services.
        <br>En quelques clics seulement trouvez l'artisan
        idéal pour vos travaux, et prenez rendez-vous
        en toute facilité.
        <br>Travail de qualité, honnêteté et surtout une
        grande confiance sont notre devise pour
        satisfaire vos besoins en terme de travaux, le
        tout, près de chez vous.</p>
    </div>
    <div>
        <h1 class="textb" style="margin-top:15px;">Nos artisans</h1>
        <section>
        <!-- Slideshow container -->
        <div class="slideshow-container">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="ligne">
                    <?php
                        global $bd;
                        $artisan = $bd ->query('SELECT * from artisan where wilaya_art = "tiziouzou" limit 3');
                        while($art=$artisan->fetch()){ ?>
                    <div class="cartea align">
                        <div>
                            <img src="./<?php echo $art['image_art'] ?>" class="contour1 bulle">
                        </div>
                        <br>
                        <h2 class="nomb"><a href="profil_artisan.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: #5491f6;"><b><?php echo $art['nom_art'] ."<br>". $art['prenom_art'] ?></b></a></h2>
                        <div>
                            <div>
                                <h3 class="contact to"><?php echo $art['metier'] ?></h3>
                            </div>
                            <br>
                            <hr>
                            <div class="">
                                <h4 class="contact" style="margin: 15px 10px;"> <?php echo $art['description'] ?> </4>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="ligne">
                    <?php
                        global $bd;
                        $artisan = $bd ->query('SELECT * from artisan where wilaya_art = "alger" limit 3');
                        while($art=$artisan->fetch()){ ?>
                    <div class="cartea align">
                        <div>
                            <img src="./<?php echo $art['image_art'] ?>" class="contour1 bulle">
                        </div>
                        <br>
                        <h2 class="nomb"><a href="profil_artisan.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: #5491f6;"><b><?php echo $art['nom_art'] ."<br>". $art['prenom_art'] ?></b></a></h2>
                        <div>
                            <div>
                                <h3 class="contact to"><?php echo $art['metier'] ?></h3>
                            </div>
                            <br>
                            <hr>
                            <div class="">
                                <h4 class="contact" style="margin: 15px 10px;"> <?php echo $art['description'] ?> </4>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="ligne">
                    <?php
                        global $bd;
                        $artisan = $bd ->query('SELECT * from artisan where wilaya_art = "oran" limit 3');
                        while($art=$artisan->fetch()){ ?>
                    <div class="cartea align">
                        <div>
                            <img src="./<?php echo $art['image_art'] ?>" class="contour1 bulle">
                        </div>
                        <br>
                        <h2 class="nomb"><a href="profil_artisan.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: #5491f6;"><b><?php echo $art['nom_art'] ."<br>". $art['prenom_art'] ?></b></a></h2>
                        <div>
                            <div>
                                <h3 class="contact to"><?php echo $art['metier'] ?></h3>
                            </div>
                            <br>
                            <hr>
                            <div class="">
                                <h4 class="contact" style="margin: 15px 10px;"> <?php echo $art['description'] ?> </4>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="ligne">
                    <?php
                        global $bd;
                        $artisan = $bd ->query('SELECT * from artisan where wilaya_art = "boumerdes" limit 3');
                        while($art=$artisan->fetch()){ ?>
                    <div class="cartea align">
                        <div>
                            <img src="./<?php echo $art['image_art'] ?>" class="contour1 bulle">
                        </div>
                        <br>
                        <h2 class="nomb"><a href="profil_artisan.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: #5491f6;"><b><?php echo $art['nom_art'] ."<br>". $art['prenom_art'] ?></b></a></h2>
                        <div>
                            <div>
                                <h3 class="contact to"><?php echo $art['metier'] ?></h3>
                            </div>
                            <br>
                            <hr>
                            <div class="">
                                <h4 class="contact" style="margin: 15px 10px;"> <?php echo $art['description'] ?></4>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <!-- The dots/circles -->
        <div style="text-align:center;margin-bottom:30px;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
        </section>
    </div>
    <div class="fond">
        <h1 class="textv">Qui sont nos artisans ?</h1>
        <form class="situation" method="post" action="carte.php">
            <ul class="liste">
                <li><b><button class="cat" name="carreleur">Carreleur</button></b></li><br>
                <li><b><button class="cat" name="chauffagiste">Chauffagiste</button></b></li><br>
                <li><b><button class="cat" name="electricien">Electricien</button></b></li>
            </ul>
            <ul class="liste">
                <li><b><button class="cat" name="ferronier">Ferronier</button></b></li><br>
                <li><b><button class="cat" name="jardinier">Jardinier</button></b></li><br>
                <li><b><button class="cat" name="macon">Maçon</button></b></li>
            </ul>
            <ul class="liste">
                <li><b><button class="cat" name="peintre">Peintre</button></b></li><br>
                <li><b><button class="cat" name="plombier">Plombier</button></b></li><br>
                <li><b><button class="cat" name="serrurier">Serrurier</button></b></li>
            </ul>    
            <ul class="liste">
                <li><b><button class="cat" name="vitrier">Vitrier</button></b></li>
            </ul>              
        </form>
    </div>
    <div class="fond1">
        <h1 class="textb">Où se situent nos artisans ?</h1>
        <div class="situation1">
            <div class="ligne">
                <ul class="liste1">
                    <li><b class="wil">01.Adrar</b></li><br>
                    <li><b class="wil">02.Chlef</b></li><br>
                    <li><b class="wil">06.Béjaïa</b></li><br>
                    <li><b class="wil">11.Tamanrasset</b></li><br>
                    <li><b class="wil">12.Tébessa</b></li><br>
                    <li><b class="wil">13.Tlemcen</b></li><br>
                    <li><b class="wil">14.Tiaret</b></li>
                </ul>
                <ul class="liste1">
                    <li><b class="wil">15.Tizi-ouzou</b></li><br>
                    <li><b class="wil">16.Alger</b></li><br>
                    <li><b class="wil">19.Sétif</b></li><br>
                    <li><b class="wil">21.Skikda</b></li><br>
                    <li><b class="wil">25.Constantine</b></li><br>
                    <li><b class="wil">26.Médéa</b></li><br>
                    <li><b class="wil">28.M’sila</b></li>
                </ul>
                <ul class="liste1">
                    <li><b class="wil">30.Ouargla</b></li><br>
                    <li><b class="wil">31.Oran</b></li><br>
                    <li><b class="wil">32.El Bayadh</b></li><br>
                    <li><b class="wil">33.Illizi</b></li><br>
                    <li><b class="wil">35.Boumerdès</b></li><br>
                    <li><b class="wil">37.Tindouf</b></li><br>
                    <li><b class="wil">45.Naâma</b></li>
                </ul>
            </div>
            <img src="./images/accueil/carte.png">
        </div>
    </div>
    <?php
        include_once("footer.php");
    ?>
    <script src="slide.js"></script>
</body>
</html>