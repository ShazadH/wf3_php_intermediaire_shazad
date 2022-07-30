<?php

function debug($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

function d_exit($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    exit;
}



function redirection($url)
{
    header("Location: $url");
    exit;
}

function affichage($fichier, array $parametres = [])
{

    extract($parametres);

    include "vues/header.html.php";
    include "vues/$fichier";
    include "vues/footer.html.php";
}
