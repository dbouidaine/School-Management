<div class="p-2 mb-3 article">
    <div class="card">
        <div class="card-img-top to-zoom">
            <img src="<?= img($args['article']['image']) ; ?>" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h4><?= $args['article']['title'] ?></h4>
            <p class="card-text card-paragraph"><?= htmlspecialchars($args['article']['description']); ?></p>
        </div>
    </div>
</div>