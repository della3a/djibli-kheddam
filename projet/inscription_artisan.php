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
    <title>Djibli kheddam - Inscription artisan</title>
</head>
<body>
    <?php 
        include_once("header.php");
    ?>
    <div class="fakeheader"></div>
    <?php
        include_once("categories.php");
    ?>
    <h1 class="titrev">Inscrivez-vous gratuitement en tant qu'artisan</h1>
    <div class="marcher ligne">
        <h3 class="deja">Vous avez déjà un compte ?</h3>
        <button class="connecte"><a href="connexion.php">Je me connecte</a></button>
    </div>
    <form class="histoire" method="post" ENCTYPE="multipart/form-data">
        <div class="accueil1">
            <div>
                <p class="contact">Inscrivez-vous gratuitement sur notre plateforme en remplissant<br>
                    le formulaire ci-dessous. Vous disposerez d'une nouvelle visibilité<br>
                    sur internet grâce à notre annuaire et la possibilité de proposer<br>
                    vos services à des clients.<br>
                    Inscription gratuite et sans engagement.<br>
                    <p class="champ">* Champs obligatoires</p>
                </p>
                <br>
                <div class="form">
                    <div><ul class="list">
                        <li class="listes"><label class="textg">Nom<sup>*</sup></label>
                        <input type="text" class="input" name="nom_art" required></li>
                        <li class="listes"><label class="textg">Prénom<sup>*</sup></label>
                        <input type="text" class="input" name="prenom_art" required></li>
                    </ul></div> 
                    <div><ul class="list">
                        <li class="listes"><label class="textg">Métier<sup>*</sup></label>
                        <select class="wila" name="metier" required>
                            <option value="0">Métier</option>
                            <option value="carreleur">Carreleur</option>
                            <option value="chauffagiste">Chauffagiste</option>
                            <option value="electricien">Electricien</option>
                            <option value="ferronier">Ferronier</option>
                            <option value="jardinier">Jardinier</option>
                            <option value="macon">Maçon</option>
                            <option value="peintre">Peintre</option>
                            <option value="Plombier">Plombier</option>
                            <option value="serrurier">Serrurier</option>
                            <option value="vitrier">Vitrier</option>
                        </select></li>
                        <li class="listes"><label class="textg">Années d'éxpérience<sup>*</sup></label>
                        <input type="number" class="input" name="annees_exp" required></li>
                    </ul></div>
                    <div><ul class="list">
                        <li class="listes"><label class="textg">Email<sup>*</sup></label>
                        <input type="email" placeholder="kheddam@gmail.com" class="input" name="email_art" required></li>
                        <li class="listes"><label class="textg">N° de téléphone<sup>*</sup></label>
                        <input type="tel" placeholder="N° de téléphone visible aux clients" class="input" name="tel_art" required></li>
                    </ul></div>
                    <div><ul class="list">
                        <li class="listes"><label class="textg">Wilaya<sup>*</sup></label>
                        <select name="wilaya_art" class="wila" required>
                            <option value="Wilaya">Wilaya</option>
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
                        </select></li>
                        <li class="listes"><label class="textg">Adresse<sup>*</sup></label>
                        <input type="text" class="input" name="adresse_art"></li>
                    </ul></div>
                    <div><ul class="list">
                        <li class="listes"><label class="textg">Description<sup>*</sup></label>
                        <textarea placeholder="Saisissez votre description" class="inputd" name="description"></textarea></li>
                    </ul></div>
                    <div><ul class="list">
                        <li class="listes"><label class="textg">Vos services à partir de <sup>*</sup></label>
                        <input type="number" placeholder="Dinars algériens" class="input" name="tarifs" required></li>
                        <li class="listes"><label class="textg">Confirmation<sup>*</sup></label>
                        <input type="file" style="outline: none; margin: 11px 0px;" name="image_art" required></li>
                    </ul></div>
                    <div><ul class="list">
                        <li class="listes"><label class="textg">Mot de passe<sup>*</sup></label>
                        <input type="password" placeholder="8 caractères minimum" class="input" name="mdp_art" required></li>
                        <li class="listes"><label class="textg">Confirmation<sup>*</sup></label>
                        <input type="password" class="input" name="confirmation" required></li>
                    </ul></div>
                </div>
            </div>
            <img src="./images/inscription/artisan.png" class="img">
        </div>
        <button class="voir cherche" name="inscrire"><b>Je m'inscris</b></button>
    </form>
    <?php 
        include("bdd.php");
        if(isset($_POST['inscrire'])){
            if(isset($_POST['carreleur'])){
                $_POST['metier'] = 'Carreleur';
            }
            if(isset($_POST['chauffagiste'])){
                $_POST['metier'] = 'Chauffagiste';
            }
            if(isset($_POST['electricien'])){
                $_POST['metier'] = 'Electricien';
            }
            if(isset($_POST['ferronier'])){
                $_POST['metier'] = 'Ferronier';
            }
            if(isset($_POST['jardinier'])){
                $_POST['metier'] = 'Jardinier';
            }
            if(isset($_POST['macon'])){
                $_POST['metier'] = 'Maçon';
            }
            if(isset($_POST['peintre'])){
                $_POST['metier'] = 'Peintre';
            }
            if(isset($_POST['plombier'])){
                $_POST['metier'] = 'Plombier';
            }
            if(isset($_POST['serrurier'])){
                $_POST['metier'] = 'Serrurier';
            }
            if(isset($_POST['vitrier'])){
                $_POST['metier'] = 'Vitrier';
            }

            if(isset($_POST['adrar'])){
                $_POST['wilaya_art'] = 'Adrar';
            }
            if(isset($_POST['chlef'])){
                $_POST['wilaya_art'] = 'Chlef';
            }
            if(isset($_POST['bejaia'])){
                $_POST['wilaya_art'] = 'Béjaïa';
            }
            if(isset($_POST['tamanrasset'])){
                $_POST['wilaya_art'] = 'Tamanrasset';
            }
            if(isset($_POST['tebessa'])){
                $_POST['wilaya_art'] = 'Tébessa';
            }
            if(isset($_POST['tlemcen'])){
                $_POST['wilaya_art'] = 'Tlemcen';
            }
            if(isset($_POST['tiaret'])){
                $_POST['wilaya_art'] = 'Tiaret';
            }
            if(isset($_POST['tiziouzou'])){
                $_POST['wilaya_art'] = 'Tizi-Ouzou';
            }
            if(isset($_POST['alger'])){
                $_POST['wilaya_art'] = 'Alger';
            }
            if(isset($_POST['setif'])){
                $_POST['wilaya_art'] = 'Sétif';
            }
            if(isset($_POST['skikda'])){
                $_POST['wilaya_art'] = 'Skikda';
            }
            if(isset($_POST['constantine'])){
                $_POST['wilaya_art'] = 'Constantine';
            }
            if(isset($_POST['medea'])){
                $_POST['wilaya_art'] = 'Médéa';
            }
            if(isset($_POST['msila'])){
                $_POST['wilaya_art'] = "M'sila";
            }
            if(isset($_POST['ouargla'])){
                $_POST['wilaya_art'] = 'Ouargla';
            }
            if(isset($_POST['oran'])){
                $_POST['wilaya_art'] = 'Oran';
            }
            if(isset($_POST['elbayedh'])){
                $_POST['wilaya_art'] = 'El Bayedh';
            }
            if(isset($_POST['illizi'])){
                $_POST['wilaya_art'] = 'Illizi';
            }
            if(isset($_POST['boumerdes'])){
                $_POST['wilaya_art'] = 'Boumerdès';
            }
            if(isset($_POST['tindouf'])){
                $_POST['wilaya_art'] = 'Tindouf';
            }
            if(isset($_POST['naama'])){
                $_POST['wilaya_art'] = 'Naâma';
            }

            extract($_POST);
            if(filter_var($email_art, FILTER_VALIDATE_EMAIL)) {
                $email = $bd->prepare("SELECT * FROM artisan WHERE email_art = ?");
                $email->execute(array($email_art));
                $mailexist = $email->rowCount();
                if($mailexist == 0) {
                    $tel = $bd->prepare("SELECT * FROM artisan WHERE tel_art = ?");
                    $tel->execute(array($tel_art));
                    $tellexist = $tel->rowCount();
                    if($tellexist == 0) {
                        if(strlen($mdp_art) > 7){
                            if($mdp_art == $confirmation){
                                $options = [
                                    'cost' => 12,
                                ];
                                $hashmdp = password_hash($mdp_art, PASSWORD_BCRYPT, $options);
                                global $bd;
                                $infosfichier = pathinfo($_FILES['image_art']['name']);
                                $extension_upload = $infosfichier['extension'];
                                $extensions_autorisees = array('jpg','jpeg','png');
                                if (in_array($extension_upload, $extensions_autorisees)){
                                    move_uploaded_file($_FILES['image_art']['tmp_name'],$endroit ='images/'.$_FILES['image_art']['name']);
                                    $artisan = $bd->prepare("INSERT into artisan (nom_art,prenom_art,metier,annees_exp,email_art,tel_art,
                                    wilaya_art,adresse_art,description,tarifs,image_art,mdp_art) VALUES 
                                    (:nom_art,:prenom_art,:metier,:annees_exp,:email_art,:tel_art,
                                    :wilaya_art,:adresse_art,:description,:tarifs,:image_art,:mdp_art)");
                                    $artisan->execute([
                                        'nom_art' => $nom_art,
                                        'prenom_art' => $prenom_art,
                                        'metier' => $metier,
                                        'annees_exp' => $annees_exp,
                                        'email_art' => $email_art,
                                        'tel_art' => $tel_art,
                                        'wilaya_art' => $wilaya_art,
                                        'adresse_art' => $adresse_art,
                                        'description' => $description,
                                        'tarifs' => $tarifs,
                                        'image_art' => $endroit,
                                        'mdp_art' => $hashmdp

                                    ]);
                                }else{
                                    echo'<h3 class="erreur">Format de fichier non valide</h3>';
                                }
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