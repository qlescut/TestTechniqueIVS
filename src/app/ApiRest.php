<?php
       try
       {
              $bdd = new PDO('mysql:host=;dbname:testtechniqueivs', 'root', '');
              echo("connecté");
       }

       catch(Exception $error)
       {
              die('Erreur : '.$error->getMessage());
       }

       $pieces = 'SELECT name, personnes_presentes FROM pieces';
       foreach ($bdd->query($pieces) as $row) {
              print $row['name'] . "\t";
              print $row['personnes_presentes'] . "\n";
       }      

       $buildings = $bdd->prepare('SELECT name, zipcode, personnes_presentes FROM buildings');
       $buildings_result = $buildings->fetch(PDO::FETCH_BOTH);
       print_r($buildings_result ); 
       print("\n");

       $organisations = $bdd->prepare('SELECT name, personnes_presentes FROM organisations');
       $organisations_result = $organisations->fetch(PDO::FETCH_BOTH);
       print_r($organisations_result ); 
       print("\n");
?>