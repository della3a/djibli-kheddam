<!-- ;==========================================
     ; Title:  Djibli Kheddam project
     ; Author: Manel Kheffache, Anais Tinhinane Amara, Kenza Benbouabdellah & Bilal Si Said 
     ; Date:   1 Jul 2020
     ;========================================== -->
     
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image.png" href="./images/icone.png">
    <link rel="stylesheet" href="style.css">
    <title>Djibli kheddam - Connexion</title>
</head>
<body>
    <?php 
        include_once("header.php");
    ?>
    <div class="fakeheader"></div>
    <?php
        include_once("categories.php");
    ?>
    <h1 class="vous">Connectez-vous</h1>
    <div class="marcher ligne">
        <h3 class="deja1">Vous n'avez pas de compte ?</h3>
        <button class="je"><a href="inscription_artisan.php">Je m'inscris <br>en tant qu'artisan</a></button>
        <button class="je"><a href="inscription_client.php">Je m'inscris <br>en tant que client</a></button>
    </div>
    <form class="histoire" method="post" action="">
        <div class="connex">
            <div class="box1">
                <div class="box">
                    <label class="textg">E-mail</label>
                    <input type="text" placeholder="kheddam@gmail.com" class="input1" name="email" required>
                </div>
                <div class="box">
                    <label class="textg">Mot de passe</label>
                    <input type="password" placeholder="" class="input1" name="mdp" required>
                    <a href="reinitialisation.php" id="mdp">Mot de passe oublié ?</a>
                </div> 
                <div id="souvenir"><input type="checkbox"><label class="textg">Se souvenir de moi</label></div>
                <div style="display: flex;">
        <button class="connect voir" name="connectera" style="margin-top: 86px;"><b>Je me connecte en <br>tant qu'artisan</b></button>
        <button class="connect voir" name="connecterc" style="margin-top: 86px;"><b>Je me connecte en <br>tant que client</b></button>
        </div>
            </div>
            <img src="./images/connexion.png" class="image" style="margin: 40px 0px;">
        </div>
    </form>
    <?php
        include("bdd.php");
        if(isset($_POST['connectera'])){
            extract($_POST);
            if(!empty($email) && !empty($mdp)){
                $connecta = $bd->prepare("SELECT * from artisan where email_art = :email_art");
                $connecta->execute(['email_art' => $email]);
                $result = $connecta->fetch();
                if($result == true){
                    $hashmdp = $result['mdp_art'];
                    if(password_verify($mdp, $hashmdp)){
                        $_SESSION['id_art'] = $result['id_art'];
                        $_SESSION['nom_art'] = $result['nom_art'];
                        $_SESSION['prenom_art'] = $result['prenom_art'];
                        $_SESSION['metier'] = $result['metier'];
                        $_SESSION['annees_exp'] = $result['annees_exp'];
                        $_SESSION['tel_art'] = $result['tel_art'];
                        $_SESSION['email_art'] = $result['email_art'];
                        $_SESSION['wilaya_art'] = $result['wilaya_art'];
                        $_SESSION['description'] = $result['description'];
                        header('location: profil_artisan_connexion.php?id='.$_SESSION['id_art']);
                    }else{
                        echo'<p class="erreur">Vous aves saisi un mot de passe incorrect</p>';
                    }
                }
                else{
                    echo'<p class="erreur">Vous avez saisi une adresse e-mail incorrecte</p>';
                }
            }
        }
        if(isset($_POST['connecterc'])){
            extract($_POST);
            if(!empty($email) && !empty($mdp)){
                $connectc = $bd->prepare("SELECT * from client where email_cl = :email_cl");
                $connectc->execute(['email_cl' => $email]);
                $result = $connectc->fetch();
                if($result == true){
                    $hashmdp = $result['mdp_cl'];
                    if(password_verify($mdp, $hashmdp)){
                        $_SESSION['id_cl'] = $result['id_cl'];
                        $_SESSION['nom_cl'] = $result['nom_cl'];
                        $_SESSION['prenom_cl'] = $result['prenom_cl'];
                        $_SESSION['email_cl'] = $result['email_cl'];
                        $_SESSION['tel_cl'] = $result['tel_cl'];
                        header('location: profil_client.php?id='.$_SESSION['id_cl']);
                    }else{
                        echo'<p class="erreur">Vous aves saisi un mot de passe incorrect</p>';
                    }
                }
                else{
                    echo'<p class="erreur">Vous avez saisi une adresse e-mail incorrecte</p>';
                }
            }
        }
    ?>
    <?php
        include_once("footer.php");
    ?>
</body>
</html>