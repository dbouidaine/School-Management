<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
    
        <div>
            <h2 class="p-3">Modifier Paragraph</h2>
        </div>
        <div class="card text-left">
          <img class="card-img-top" alt="">
          <div class="card-body">
            <form class="new-article" action="<?=url('presentation/update')?>" method="POST">
              <input name="id" type="text" placeholder="id" value="<?=$args['presentation']['id'];?>" required hidden>
              <textarea class="w-100" name="paragraph" type="text" placeholder="paragraph" required><?=$args['presentation']['paragraph'];?></textarea>
              <input class="w-100 file-input" name="image" type="file" accept="image/*" placeholder="image">
              <button class="float-end my-btn my-btn-blue no-decoration" type="submit" name="add_formation" id="form-btn">Modifier Paragraph</button>
            </form>
          </div>
        </div>
        
    </div>
</div>