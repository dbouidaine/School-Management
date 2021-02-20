<?php foreach($args['articles'] as $arg){?>
<div class="p-2 col-sm-6 col-md-4 col-xl-3 mb-3">
    <div class="card">
        <div class="card-img-top to-zoom">
            <img src="<?= $arg['image'];?>" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h4><?= $arg['title']; ?></h4>
            <p class="card-text"><?= $arg['description'];?> ... </p>
        </div>
        <div class="card-footer">
            <a href="/article/show/<?= $arg['id'];?>" class="card-link">Afficher la suite</a>
        </div>
    </div>
</div>
<?php } ?>