<?php
require "inc/init.inc.php";

$requete = $connexion->query("SELECT * FROM advert ORDER BY  id DESC LIMIT 15");

if ($requete) {
    $adverts = $requete->fetchAll(PDO::FETCH_ASSOC);
} else {
    $_SESSION["danger"] = "Erreur lors de la récuperation des produits";
}

include "vues/header.html.php";
?>
<div class="card-row d-flex flex-wrap justify-content-around ">
    <?php foreach ($adverts as $adverts) : ?>
        <div class="card  text-center mb-3 mx-3 " style="height: 30rem; width: 30rem">
            <img class="card-img-top" style="height: 15rem" src="/assets/img/home.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $adverts["id"] ?></h5>

                <h5 class="card-title"><?= strtoupper($adverts["title"]) ?></h5>
                <p class="card-text"><?= $adverts["description"] ?></p>
                <p class="card-text reserved"><?= $adverts["reserved"] ? 'Reservé' : '' ?> </p>
                <a href="details_advert.php?id=<?= $adverts["id"] ?>" class="btn btn-primary">Consulter l'annonce</a>
            </div>
        </div>

    <?php endforeach ?>
</div>
<?php
include "vues/footer.html.php";
