<?php if (!empty($erreurs)) : ?>
    <div class="erreur-formulaire mb-5">
        <?php foreach ($erreurs as $err) : ?>
            <div class="text-danger"><?= $err ?></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>