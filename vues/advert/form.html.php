<?php
$mode = $mode ?? "insertion";
?>

<?php include "vues/erreurs_formulaire.html.php"; ?>
<form method="post">
    <div class="form-group">
        <label for="title"><strong>Titre de l'annonce</strong></label>
        <input type="text" name="title" id="title" class="form-control" value="<?= $title ?? '' ?>">
    </div>
    <div class="form-group">
        <label for="description"><strong>Description de l'annonce</strong></label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control" value="<?= $description ?? '' ?>"></textarea>
    </div>
    <div class="form-group">
        <label for="postal_code"><strong>Code postal</strong> de l'annonce du bien immobilier</label>
        <input type="zip" name="postal_code" id="postal_code" class="form-control" value="<?= $postal_code ?? '' ?>">
    </div>
    <div class="form-group">
        <label for="city"><strong>Ville</strong> de l'annonce du bien immobilier </label>
        <input type="text" name="city" id="city" class="form-control" value="<?= $city ?? '' ?>">
    </div>
    <div class="form-group">
        <label for="type"><strong>Type de l'annonce</strong> </label>
        <input type="text" name="type" id="type" class="form-control" value="<?= $type ?? '' ?>">
    </div>
    <div class="form-group">
        <label for="price"><strong>Prix</strong> </label>
        <input type="number" name="price" id="price" class="form-control" value="<?= $price ?? '' ?>">
    </div>


    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">
            <?= $mode == "suppression" ? "Confirmer" : "Enregistrer" ?>
        </button>
        <a href="livre_liste.php" class="btn btn-danger">Annuler</a>
    </div>
</form>