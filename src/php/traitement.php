<?php
    $host ='localhost';
    $port =3306;
    $dbname ='formulaire';
    $user='root';
    $pwd='';

        try{
            $newBD= new PDO("mysql:host=$host;port=$port;dbname=$dbname",$user,$pwd);
            print "Connexion etablie";
        }
        catch(PDOException $e){
            die('Erreur :'.$e->getMessage());
        }

        var_dump($_POST);

        if (isset($_POST["nom"])&&
           isset($_POST["prenom"])&&
           isset($_POST["sujet"])&&
           isset($_POST["email"])&&
           isset($_POST["cgu"])
           ){
               $insertion=$newBD->prepare("INSERT INTO profil VALUES(NULL,:nom,:prenom,:sujet,:email,:comment)");
               $insertion->bindValue(":nom",$_POST["nom"]);
               $insertion->bindValue(":prenom",$_POST["prenom"]);
               $insertion->bindValue(":sujet",$_POST["sujet"]);
               $insertion->bindValue(":email",$_POST["email"]);
               $insertion->bindValue(":comment",$_POST["comment"]);
               $verification=$insertion->execute();
               if ($verification) {
                   print "<br>Données Envoyé !";
               }
               else{
                   print "Echec d'envoi";
               }
           }
           else{
               print "<br>Une variable n'est pas declaree et ou null";
           }
           
           header('Location: /Site-Paul-M/html/formulaire.html')
        

    ?>