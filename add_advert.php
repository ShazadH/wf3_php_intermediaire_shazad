<?php

require "inc/init.inc.php";
if ($_POST) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $postal_code = $_POST["postal_code"];
    $city = $_POST["city"];
    $type = $_POST["type"];
    $price = $_POST["price"];
    $erreurs = [];

    // Vérification de la validité du formulaire
    if (empty($title)) {
        $erreurs[] = "Le titre ne peut être vide";
    }

    if (empty($description)) {
        $erreurs[] = "La description ne peut être vide";
    }

    if (empty($postal_code)) {
        $erreurs[] = "Le code postal ne peut être vide";
    }


    if (empty($city)) {
        $erreurs[] = "La ville postal ne peut être vide";
    }


    if (empty($type)) {
        $erreurs[] = "Le type postal ne peut être vide";
    }


    if (empty($price)) {
        $erreurs[] = "Le prix postal ne peut être vide";
    }


    $title = htmlentities($title);
    $description = htmlentities($description);
    $postal_code = htmlentities($postal_code);
    $city = htmlentities($city);
    $type = htmlentities($type);
    $price = htmlentities($price);

    $title = addslashes($title);
    $description = addslashes($description);
    $postal_code = addslashes($postal_code);
    $city = addslashes($city);
    $type = addslashes($type);
    $price = addslashes($price);

    if (empty($erreurs)) {
        $requete = $connexion->exec("INSERT INTO advert (title, description, postal_code, city, type, price  ) VALUES ('$title', '$description', '$postal_code', '$city', '$type', '$price')");
        debug('test');
        debug($requete);
        if ($requete == 1) {
            $_SESSION["succes"] = "L'annonce a bien été ajoutée";
            redirection("list_advert.php");
        } else {
            $_SESSION["erreur"] = "Erreur SQL";
        }
    }
}

// AFFICHAGE
$h1 = "Ajouter une annonce";

affichage("advert/form.html.php", ["h1" => $h1]);
