<?php
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBNAME", "projet-crud");

        $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

        try{
            $pdo = new PDO($dsn, DBUSER, DBPASS);
            $pdo->exec('SET NAMES utf8');
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
        }catch(PDOException $e){
            die("Erreur".$e->getMessage());
        }

        $sql = "SELECT * FROM `taches`";
        $requete = $pdo->query($sql);
        $user = $requete->fetchAll();

        if(isset($_POST['button'])) 
        {
            if(!empty($_POST['nom']) and ($_POST['etage']) and ($_POST['date'])){
            $sql = 'INSERT INTO `taches`(`nom_taches`, `date_taches`, `etages_taches`) VALUES ("'.$_POST['nom'].'", "'.$_POST['date'].'", "'.$_POST['etage'].'")';
            $requete = $pdo->query($sql);
            }
        } 
        header("Refresh: 0.5;url= http://localhost/crud/");   
    ?>