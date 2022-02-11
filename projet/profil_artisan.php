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
            global $bd;
            if(isset($_GET['id']) AND $_GET['id'] > 0) {
                $getid = intval($_GET['id']);
                $artisan = $bd->prepare('SELECT * FROM artisan WHERE id_art = ?');
                $artisan->execute(array($getid));
                $art = $artisan->fetch();
        ?> 
        <div class="vert">
            <img src="./<?php echo $art['image_art']; ?>" class="contour">
            <b class="nomz"><?php echo $art['nom_art'] ."<br>". $art['prenom_art']; ?></b>
            <button class="nomr"><a href="rdv.php?id=<?php echo $art['id_art'] ?>" style="text-decoration: none; color: #03bea7;"><h2>Prendre rendez-vous</h2></a></button>
        </div>
        <div class="situation2 pad">
            <div style="width: 30%;">
                <h3 class="contact" style="margin-bottom: 10px;"><?php echo $art['metier']; ?></h3>
                <h3 class="contact">Experience : <br><?php echo $art['annees_exp']; ?> ans</h3>
            </div>
            <div class="mar" style="width: 150%;">
                <div class="ma">
                    <h3 class="titre bot">Contact</h3>
                    <p>Tel : 0<?php echo $art['tel_art']; ?></p>
                    <p>E-mail : <?php echo $art['email_art']; ?></p>
                </div>
                <div class="ma">
                    <div class="ligne">
                        <img src="./images/adresse.png">
                        <h3 class="titre bot">Adresse</h3>
                    </div>
                    <p>Wilaya : <?php echo $art['wilaya_art']; ?></p>
                </div>
                <div class="ma">
                    <p>Prix : <?php echo $art['tarifs']; ?> DA</p>
                </div>
                <h3 class="titre bot">Description</h3>
                <p class="contact"><?php echo $art['description']; ?></p>
            </div>
        <?php } ?>
        </div>
    </div>
    <form class="rdv1 ligne" method="post">
        <textarea placeholder="Commentaire ..." class="commentaire" name="commentaire"></textarea>
        <select class="chiffres" name="note" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <button class="chiffre" name="notes">Commenter</button>
    </form>
    <?php
    if(isset($_POST['notes'])){
        if(isset($_POST[1])){
            $_POST['note'] = 1;
        }
        if(isset($_POST[2])){
            $_POST['note'] = 2;
        }
        if(isset($_POST[3])){
            $_POST['note'] = 3;
        }
        if(isset($_POST[4])){
            $_POST['note'] = 4;
        }
        if(isset($_POST[5])){
            $_POST['note'] = 5;
        }
        if(isset($_POST[6])){
            $_POST['note'] = 6;
        }
         
        extract($_POST);
        if(!empty($commentaire) && !empty($note)){
            global $bd;
            $comment = $bd->prepare("INSERT into avis (commentaire,note,id_art) 
            VALUES (?,?,?)");
            $comment->execute(array($commentaire,$note,$getid));
        }
    }
    ?>
    <div class="comm">
        <?php 
            global $bd;
            $avis = $bd ->prepare('SELECT * from avis where id_art = ?');
            $avis->execute(array($getid));
            while($a = $avis->fetch()){
        ?>  
            <div class="coms">
                <p class="petit" style="color: #696c71"><?php echo $a['commentaire']; ?></p>
                <p style="color: #03bea7;"><?php echo $a['note']; ?></p>
            </div>  
            <p style="margin-bottom: 20px;
            text-align: end;
            margin-right: 260px;
            color: #696c71"><?php echo $a['date']; ?></p>
        <?php } ?>
    </div>
    <?php
        include_once("footer.php");
    ?>
</body>
</html>