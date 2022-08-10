<?php
include "inc/init.inc.php";

$requete = $connexion->query("SELECT * FROM advert");
$adverts = $requete->fetchAll(PDO::FETCH_ASSOC);


// AFFICHAGE
$h1 = "Liste des annonces";
include "vues/header.html.php";
?>
<div class="col-sm-6"></div>
<div class="card-columns d-flex flex-wrap justify-content-between">
    <?php foreach ($adverts as $adverts) : ?>
        <div class="card mb-3" style="width: 18rem;">
            <img class="card-img-top" src="/assets/img/home.jpg" alt="Card image cap">
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
