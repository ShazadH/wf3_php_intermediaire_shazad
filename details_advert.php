<?php

require "inc/init.inc.php";
$id = $_GET["id"] ?? null;
debug($id);
debug($_POST);
if ($_POST) {
    $reservation_message = $_POST["reservation_message"];
    $erreurs = [];


    // Vérification de la validité du formulaire
    if (empty($reservation_message)) {
        $erreurs[] = "Le titre ne peut être vide";
    }

    $reservation_message = htmlentities($reservation_message);
    $reservation_message = addslashes($reservation_message);

    if (empty($erreurs)) {
        $requete = $connexion->exec("INSERT INTO advert (reservation_message) VALUES ('$reservation_message') ");
        debug($requete);
        if ($requete == 1) {
            $_SESSION["succes"] = "L'annonce a bien été ajoutée";
            redirection("list_advert.php");
        } else {
            $_SESSION["erreur"] = "Erreur SQL";
        }
    }
}

if ($id) {
    if (is_numeric($id)) {
        $requete = $connexion->query("SELECT * FROM advert WHERE id = $id");
        if ($requete !== false) {
            if ($requete->rowCount() == 1) {
                $advert = $requete->fetch(PDO::FETCH_ASSOC);
            }
        } else {
            $_SESSION["erreur"] = "Erreur requête SQL";
        }
    } else {
        $_SESSION["erreur"] = "Erreur 404 : cette page n'existe pas";
    }
} else {
    $_SESSION["erreur"] = "Erreur 403 : vous n'avez pas accès à cet URL";
    redirection("abonne_liste.php");
}

affichage("advert/fiche.html.php", [
    "advert" => $advert,
    "h1" => "Fiche annonce"
]);
