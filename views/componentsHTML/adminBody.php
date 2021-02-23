<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        
        <h1>A new page</h1>
        <div class="card text-left">
          <img class="card-img-top" alt="">
          <div class="card-body">
            <h4 class="card-title">Title</h4>
            <form class="php-add-formation" action="<?=url('article/add')?>" method="POST">
                <input name="author" type="text" placeholder="author" required>
                <input name="title" type="text" placeholder="title" required>
                <input name="description" type="text" placeholder="description" required>
                <input name="image" type="text" placeholder="image" required>
                <button type="submit" name="add_formation" id="form-btn">Add Article</button>
            </form>
          </div>
        </div>
        
    </div>
</div>