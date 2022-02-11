<!-- ;==========================================
     ; Title:  Djibli Kheddam project
     ; Author: Manel Kheffache, Anais Tinhinane Amara, Kenza Benbouabdellah & Bilal Si Said 
     ; Date:   1 Jul 2020
     ;========================================== -->
    
    <?php
    define('serveur','localhost');
    define('bdd','projet');
    define('utilisateur','root');
    define('mdp','');

    try{
        $bd = new PDO("mysql:host=" . serveur . ";dbname=" . bdd, utilisateur, mdp);
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDO0Exception $e){
         echo $e;
    }

?>
