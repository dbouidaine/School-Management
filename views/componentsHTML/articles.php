<?php foreach($args['articles'] as $arg){?>
<div class="p-2 col-sm-6 col-md-4 col-xl-3 mb-3">
    <div class="card">
        <div class="card-img-top to-zoom">
            <img src="/assets/my-assets/img/carousel2.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h3><?= $arg['title']; ?></h3>
            <p class="card-text"><?= $arg['description'];?> ... </p>
            <a href="/article/show/<?= $arg['id'];?>" class="card-link">Afficher la suite</a>
        </div>
    </div>
</div>
<?php } ?>