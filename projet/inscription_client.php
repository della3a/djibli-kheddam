<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image.png" href="./images/icone.png">
    <link rel="stylesheet" href="style.css">
    <title>Djibli kheddam - Inscription client</title>
</head>
<body>
    <?php 
        include_once("header.php");
    ?>
    <div class="fakeheader"></div>
    <?php
        include_once("categories.php");
    ?>
    <h1 class="titreb">Inscrivez-vous gratuitement en tant que client</h1>
    <div class="marcher ligne">
        <h3 class="deja">Vous avez déjà un compte ?</h3>
        <button class="connecte1"><a href="connexion.php">Je me connecte</a></button>
    </div>
    <form class="histoire" method="post" ENCTYPE="multipart/form-data">
        <div class="accueil1">
            <div>
                <p class="contact">Inscrivez-vous gratuitement sur notre plateforme en remplissant<br>
                    le formulaire ci-dessous. Vous disposerez d'une nouvelle visibilité<br>
                    sur internet grâce à notre annuaire et la possibilité de proposer<br>
                    vos services à des clients.<br>
                    <p class="champ">* Champs obligatoires</p>
                </p>
                <br>
                <div class="form">
                    <div><ul class="list">
                        <li class="listes"><label class="textg">Nom<sup>*</sup></label>
                        <input type="text" class="input" name="nom_cl" required></li>
                        <li class="listes"><label class="textg">Prénom<sup>*</sup></label>
                        <input type="text" class="input" name="prenom_cl" required></li>
                    </ul></div>
                    <div><ul class="list">
                        <li class="listes"><label class="textg">Email<sup>*</sup></label>
                        <input type="text" placeholder="kheddam@gmail.com" class="input" name="email_cl" required></li>
                        <li class="listes"><label class="textg">N° de téléphone<sup>*</sup></label>
                        <input type="text" placeholder="N° de téléphone visible aux clients" class="input" name="tel_cl"></li>
                    </ul></div>
                    <div><ul class="list">
                        <li class="listes"><label class="textg">Mot de passe<sup>*</sup></label>
                        <input type="password" placeholder="8 caractères minimum" class="input" name="mdp_cl" required></li>
                        <li class="listes"><label class="textg">Confirmation<sup>*</sup></label>
                        <input type="password" class="input" name="confirmation" required></li>
                    </ul></div>
                </div>
            </div>
            <img src="./images/inscription/client.png">
        </div>
        <button class="voir connect" name='inscrire'><b>Je m'inscris</b></button>
    </form>
    <?php 
        include("bdd.php");
        if(isset($_POST['inscrire'])){
            extract($_POST);
            if(filter_var($email_cl, FILTER_VALIDATE_EMAIL)) {
                $email = $bd->prepare("SELECT * FROM client WHERE email_cl = ?");
                $email->execute(array($email_cl));
                $mailexist = $email->rowCount();
                if($mailexist == 0) {
                        $tel = $bd->prepare("SELECT * FROM client WHERE tel_cl = ?");
                        $tel->execute(array($tel_cl));
                        $tellexist = $tel->rowCount();
                        if($tellexist == 0) {
                            if(strlen($mdp_cl) > 7){
                                if($mdp_cl == $confirmation){
                                    $options = [
                                        'cost' => 12,
                                    ];
                                    $hashmdp = password_hash($mdp_cl, PASSWORD_BCRYPT, $options);
                                    global $bd;
                                        $client = $bd->prepare("INSERT into client (nom_cl,prenom_cl,email_cl,tel_cl,mdp_cl) 
                                        VALUES (:nom_cl,:prenom_cl,:email_cl,:tel_cl,:mdp_cl)");
                                        $client->execute([
                                            'nom_cl' => $nom_cl,
                                            'prenom_cl' => $prenom_cl,
                                            'email_cl' => $email_cl,
                                            'tel_cl' => $tel_cl,
                                            'mdp_cl' => $hashmdp
                                        ]);
                                }else{
                                    echo'<h3 class="erreur">Veuillez vérifier votre mot de passe</h3>';
                                }
                            }else{
                                echo'<h3 class="erreur">Votre mot de passe est trop court</h3>';
                            }
                        }else{
                            echo'<h3 class="erreur">Vous avez saisi un n° de téléphone utilisé</h3>';
                        }
                }else{
                    echo'<h3 class="erreur">Vous avez saisi un e-mail utilisé</h3>';
                }
            }else{
                echo'<h3 class="erreur">Vous avez saisi un e-mail invalide</h3>';
            }
        }
    ?>
    <?php
        include_once("footer.php");
    ?>
</body>
</html>