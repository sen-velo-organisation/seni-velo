<?php
    /*
    Ce fichier joue le rôle de model
    crée le 13/08/2017
    */

    //Initialisation des variables
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "dbvelo";

    //Fontion qui permet d'obtenir tous les produits
    function getAllVelos(){
        global $host, $user, $pwd, $db;

        //Connexion à la base de données
        $conn = mysqli_connect($host, $user, $pwd, $db);

        // Création de la requête
        $req = "SELECT * FROM velo_t";

        // On envoie la requête 
        $res = $conn->query($req);

        //On ferme la connection
        mysqli_close($conn);
        //Et on retourne la réponse
        return $res;
    }

    function get14PoucesVelos(){
        global $host, $user, $pwd, $db;

        //Connexion à la base de données
        $conn = mysqli_connect($host, $user, $pwd, $db);

        // Création de la requête
        $req = "SELECT * FROM velo_t WHERE taille = 14";

        // On envoie la requête 
        $res = $conn->query($req);

        //On ferme la connection
        mysqli_close($conn);
        //Et on retourne la réponse
        return $res;
    }

    function get16PoucesVelos(){
        global $host, $user, $pwd, $db;

        //Connexion à la base de données
        $conn = mysqli_connect($host, $user, $pwd, $db);

        // Création de la requête
        $req = "SELECT * FROM velo_t WHERE taille = 16";

        // On envoie la requête 
        $res = $conn->query($req);

        //On ferme la connection
        mysqli_close($conn);
        //Et on retourne la réponse
        return $res;
    }