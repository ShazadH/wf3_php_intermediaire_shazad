<ul class="list-group mb-3">
    <li class="list-group-item">
        <div class="d-flex mx-auto">
            <img src="/assets/img/home.jpg" alt="">
        </div>
    </li>
    <li class="list-group-item">
        <div class="d-flex">
            <div class="col-4"><strong>ID</strong></div>
            <div class="col-6"><?= $advert["id"] ?></div>
        </div>
    </li>
    <li class="list-group-item">
        <div class="d-flex">
            <div class="col-4"><strong>Titre de l'annonce</strong></div>
            <div class="col-6"><?= $advert["title"] ?></div>
        </div>
    </li>
    <li class="list-group-item">
        <div class="d-flex">
            <div class="col-4"><strong>Descriptiondel’annonce</strong></div>
            <div class="col-6"><?= $advert["description"] ?></div>
        </div>
    </li>

    <li class="list-group-item">
        <div class="d-flex">
            <div class="col-4"><strong>Code postal </strong></div>
            <div class="col-6"><?= $advert["postal_code"] ?></div>
        </div>
    </li>

    <li class="list-group-item">
        <div class="d-flex">
            <div class="col-4"><strong>Ville</strong></div>
            <div class="col-6"><?= $advert["city"] ?></div>
        </div>
    </li>

    <li class="list-group-item">
        <div class="d-flex">
            <div class="col-4"><strong>Type</strong></div>
            <div class="col-6"><?= $advert["type"] ?></div>
        </div>
    </li>

    <li class="list-group-item">
        <div class="d-flex">
            <div class="col-4"><strong>Prix</strong></div>
            <div class="col-6"><?= $advert["price"] . "€" ?></div>
        </div>
    </li>

    <?php if ($advert["reserved"]) : ?>
        <li class="list-group-item">
            <div class="d-flex">
                <div class="col-4"><strong>Message de reservation</strong></div>
                <div class="col-6"><?= $advert["reservation_message"] ?></div>
            </div>
        </li>
    <?php endif; ?>

    <?php if (!$advert["reserved"]) : ?>
        <form method="post">
            <li class="list-group-item">
                <div class="form-group">
                    <label for="reservation_message"><strong>Message de reservation</strong></label>
                    <textarea name="reservation_message" id="reservation_message" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </li>
        </form>
    <?php endif; ?>

    <?php if ($advert["reserved"]) : ?>
        <li class="list-group-item">
            <div class="d-flex">
                <div class="col-4 reserved"><strong>Reservé</strong></div>
            </div>
        </li>
    <?php endif; ?>

</ul>

<div class=" d-flex justify-content-between mb-5">
    <a href="list_advert.php" class="btn btn-primary">
        <i class="fa-solid fa-list"></i>
    </a>
    <?php if (!$advert["reserved"]) : ?>
        <button type="submit" class="btn btn-primary">
            Enregistrer
        </button>
    <?php endif; ?>
    <a href="/" class="btn btn-primary">
        <i class="fa fa-home"></i>
    </a>
</div>