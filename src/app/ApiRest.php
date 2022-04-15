<?php
       //Connexion à la base de données
       try
       {
              $bdd = new PDO('mysql:host=;dbname:testtechniqueivs', 'root', '');
              echo("connecté");
       }

       catch(Exception $error)
       {
              die('Erreur : '.$error->getMessage());
       }

       //récupération des éléments de la table pieces
       $pieces = 'SELECT name, personnes_presentes FROM pieces';
       //affichage des éléments récupérés de la table pieces
       foreach ($bdd->query($pieces) as $row) {
              print $row['name'] . "\t";
              print $row['personnes_presentes'] . "\n";
       }      

       //récupération des éléments de la table buildings
       $buildings = $bdd->prepare('SELECT name, zipcode, personnes_presentes FROM buildings');
       //affichage des éléments récupérés de la table buildings
       $buildings_result = $buildings->fetch(PDO::FETCH_BOTH);
       print_r($buildings_result ); 
       print("\n");

       //récupération des éléments de la table organisations
       $organisations = $bdd->prepare('SELECT name, personnes_presentes FROM organisations');
       //affichage des éléments récupérés de la table organisations
       $organisations_result = $organisations->fetch(PDO::FETCH_BOTH);
       print_r($organisations_result ); 
       print("\n");
?>