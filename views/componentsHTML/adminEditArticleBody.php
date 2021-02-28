<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
    
        <div>
            <h2 class="p-3">Ajouter Article</h2>
        </div>
        <div class="card text-left">
          <img class="card-img-top" alt="">
          <div class="card-body">
            <form class="new-article" action="<?=url('article/add')?>" method="POST">
            <input class="w-100" name="id" value="<?=$args['article']['id'];?>" type="text" placeholder="title" required hidden>
              <input class="w-100" name="title" value="<?=$args['article']['title'];?>" type="text" placeholder="title" required>
              <textarea class="w-100" name="description" type="text" placeholder="description" required><?=$args['article']['description'];?></textarea>
              <input class="w-100 file-input" name="image" value="<?=$args['article']['image'];?>" type="file" accept="image/*" placeholder="image" required>
              <button class="float-end my-btn my-btn-blue" type="submit" name="add_formation" id="form-btn">Add Article</button>
            </form>
          </div>
        </div>
        
    </div>
</div>