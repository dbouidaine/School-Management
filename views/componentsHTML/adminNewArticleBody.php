<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
    
        <div>
            <h2 class="p-3">Ajouter Article</h2>
        </div>

        <div class="card text-left">
          <div class="card-body">
            <form class="new-article" action="<?=url('article/add')?>" method="POST" enctype="multipart/form-data">
              <input class="w-100" name="title" type="text" placeholder="title" required>
              <textarea class="w-100" name="description" type="text" placeholder="description" required></textarea>
              <input class="w-100 file-input" name="image" type="file" accept="image/*" placeholder="image" required>
              <button class="float-end my-btn my-btn-blue" type="submit" name="add_formation" id="form-btn">Add Article</button>
            </form>
          </div>
        </div>
        
    </div>
</div>