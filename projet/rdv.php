<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image.png" href="./images/icone.png">
    <link rel="stylesheet" href="style.css">
    <title>Prise de RDV</title>
</head>
<body>
    <?php 
        include_once("header.php");
    ?>
    <div class="fakeheader"></div>
    <?php
        include_once("categories.php");
	?>
		 
    <h1 class="text" style="margin-top: 35px;">Prise de Rendez-Vous</h1>
    <form method="post" id="u">
    <div>
        <label class="textg">Date du RDV</label><br>
		<input type="date" name="date_rdv" style="margin-bottom: 5px; margin-top: 5px;" required>
        <div>
            <label class="textg">Précisez la nature de vos travaux</label><br>
            <input type="text" class="inputa" name="travail" required>
        </div>
        <div class="">
            <label class="textg">Lieu du RDV</label><br>
            <select name="lieu" class="lieu" required>
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
                            </select>
        </div>
		<label class="textg">Adresse</label><br>
        <input type="text" class="inputa" name="adresse">	
    </div>			
		<button class="voir cherche" style="margin-top: 30px;" name="rdv"><b>Je prends RDV</b></button>
	</form>
	<?php
	include("bdd.php");
		if(isset($_POST['rdv'])){
			if(isset($_POST['adrar'])){
                $_POST['lieu'] = 'Adrar';
            }
            if(isset($_POST['chlef'])){
                $_POST['lieu'] = 'Chlef';
            }
            if(isset($_POST['bejaia'])){
                $_POST['lieu'] = 'Béjaïa';
            }
            if(isset($_POST['tamanrasset'])){
                $_POST['lieu'] = 'Tamanrasset';
            }
            if(isset($_POST['tebessa'])){
                $_POST['lieu'] = 'Tébessa';
            }
            if(isset($_POST['tlemcen'])){
                $_POST['lieu'] = 'Tlemcen';
            }
            if(isset($_POST['tiaret'])){
                $_POST['lieu'] = 'Tiaret';
            }
            if(isset($_POST['tiziouzou'])){
                $_POST['lieu'] = 'Tizi-Ouzou';
            }
            if(isset($_POST['alger'])){
                $_POST['lieu'] = 'Alger';
            }
            if(isset($_POST['setif'])){
                $_POST['lieu'] = 'Sétif';
            }
            if(isset($_POST['skikda'])){
                $_POST['lieu'] = 'Skikda';
            }
            if(isset($_POST['constantine'])){
                $_POST['lieu'] = 'Constantine';
            }
            if(isset($_POST['medea'])){
                $_POST['lieu'] = 'Médéa';
            }
            if(isset($_POST['msila'])){
                $_POST['lieu'] = "M'sila";
            }
            if(isset($_POST['ouargla'])){
                $_POST['lieu'] = 'Ouargla';
            }
            if(isset($_POST['oran'])){
                $_POST['lieu'] = 'Oran';
            }
            if(isset($_POST['elbayedh'])){
                $_POST['lieu'] = 'El Bayedh';
            }
            if(isset($_POST['illizi'])){
                $_POST['lieu'] = 'Illizi';
            }
            if(isset($_POST['boumerdes'])){
                $_POST['lieu'] = 'Boumerdès';
            }
            if(isset($_POST['tindouf'])){
                $_POST['lieu'] = 'Tindouf';
            }
            if(isset($_POST['naama'])){
                $_POST['lieu'] = 'Naâma';
            }
            extract($_POST);
            $date = $bd->prepare("SELECT * FROM rdv WHERE date_rdv = ?");
            $date->execute(array($date_rdv));
            $datexist = $date->rowCount();
            if($datexist == 0) {
                global $bd;
                $rdv = $bd->prepare("INSERT into rdv (date_rdv,travail,lieu,adresse,id_art,id_cl) values (?,?,?,?,?,?)");
                $rdv->execute(array($date_rdv,$travail,$lieu,$adresse,$_GET['id'],$_SESSION['id_cl']));
                echo'<h2 class="text" style="margin-bottom: 45px;">Votre Rendez-Vous a bien été enregistré</h2>';
            }else{
                echo'<h3 class="erreur">Date de RDV non disponible</h3>';
            }
		}?>
    <?php
        include_once("footer.php");
    ?>
</body>
</html>


