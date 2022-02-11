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
    <title>Toutes les catégories</title>
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
    <div class="accueilc">
        <div id="art">
            <h1 class="contact" style="width: 101%;">Trouvez un artisan près de chez-vous</h1>
            <form class="ligne pa" method="GET" action="cherche.php">
                <select name="wilaya" class="wilaya gen">
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
                <button class="cherche mon"><b>Je cherche <br>mon artisan</b></button>
            </form>
        </div>
        <img src="./images/categorie.png" class="photo1">
    </div>
    <form class="his" id="ca" method="post" action="carte.php">
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
            <li><b><button class="cat" name="vitirier">Vitrier</button></b></li>
        </ul>              
    </form>
    <?php
        include_once("footer.php");
    ?>
</body>
</html>