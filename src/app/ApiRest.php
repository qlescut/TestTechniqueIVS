<?php
       //Connexion à la base de données
       try
       {
              $pdo = new PDO('mysql:host=localhost;dbname=ivs', 'root', '');
       }

       catch(PDOException $error)
       {
              die('Erreur : '.$error->getMessage());
       }



       //récupération des éléments de la table pieces en préparant une requête SQl
       $sqlpieces = 'SELECT id, name, presents FROM pieces';
       //préparation de la requete 
       $statementpieces = $pdo->prepare($sqlpieces);
       // execution de la requete
       $statementpieces->execute(array());
       // afficher les éléments de la table
       while (($rowpieces = $statementpieces->fetch(PDO::FETCH_ASSOC))) {
           print $rowpieces['id'];
           print $rowpieces['name'];
           print $rowpieces['presents'];
       }



       //récupération des éléments de la table buildings en préparant une requête SQl
       $piecespresents = 'SELECT presents FROM pieces';
       //création du tableau
       $arraypieces = array();
       //préparation de la requete 
       $statpiecespresents = $pdo->prepare($piecespresents);
       // execution de la requete
       $statpiecespresents->execute($arraypieces);   

       //récupération des élements venant de la bdd
       $piecesbuildings = 'SELECT buildings FROM pieces';
       $buildingsname = 'SELECT name FROM buildings';

       //récupération des éléments de la table buildings en préparant une requête SQl
       $sqlbuildings = 'SELECT id, name, zipcode FROM buildings';
       //préparation de la requete 
       $statementbuildings = $pdo->prepare($sqlbuildings);
       // execution de la requete
       $statementbuildings->execute(array());
       // afficher les éléments de la table
       while (($rowbuildings = $statementbuildings->fetch(PDO::FETCH_ASSOC))) {
           print $rowbuildings['id'];
           print $rowbuildings['name'];
           print $rowbuildings['zipcode'];
           if($piecesbuildings = $buildingsname) {
              print array_sum($arraypieces);
           }
       }



       //récupération des éléments de la table buildings en préparant une requête SQl
       $buildingspresents = 'SELECT presents FROM buildings';
       //création du tableau
       $arraybuildings = array();
       //préparation de la requete 
       $statbuildingspresents = $pdo->prepare($buildingspresents);
       // execution de la requete
       $statbuildingspresents->execute($arraybuildings);   

       //récupération des élements venant de la bdd
       $buildingsorganisations = 'SELECT organisations FROM buildings';
       $organisationsname = 'SELECT name FROM organisations';

       //récupération des éléments de la table organisations en préparant une requête SQl
       $sqlorganisations = 'SELECT id, name FROM organisations';
       //préparation de la requete 
       $statementorganisations = $pdo->prepare($sqlorganisations);
       // execution de la requete
       $statementorganisations->execute(array());
       // afficher les éléments de la table
       while (($roworganisations = $statementorganisations->fetch(PDO::FETCH_ASSOC))) {
           print $roworganisations['id'];
           print $roworganisations['name'];
           if ($buildingsorganisations = $organisationsname) {
              print array_sum($arraybuildings);
           }
       }
?>