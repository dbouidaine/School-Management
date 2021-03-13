<div class="p-2 mb-3 article">
    <div class="card card-profile">
        <div class="card-img-top to-zoom">
            <img src="<?= img($args['article']['image']) ; ?>" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-start">
            <h3 class=" px-4 mt-3"><?= $args['article']['title'] ?></h3>
            <p class="card-text card-paragraph text-start"><?= htmlspecialchars($args['article']['description']); ?></p>
        </div>
    </div>
</div>