<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        
        <h2 class="p-3">New User</h2>
        <div class="card text-left p-5">
            <div class="pb-3">
                <a href="<?=url('user/add')?>" class="btn bg-dark text-light float-end">Ajouter Utilisateur</a>
            </div>
            <div class="card-body">
            <h4 class="card-title">Title</h4>
            <form class="php-add-formation" action="<?=url('user/add')?>" method="POST">
                <input name="email" type="email" placeholder="email" required>
                <input name="first_name" type="text" placeholder="first_name" required>
                <input name="last_name" type="text" placeholder="last_name" required>
                <input name="password" type="password" placeholder="password" required>
                <input name="role" type="number" placeholder="role" required>
                <button type="submit" name="add_formation" id="form-btn">New User</button>
            </form>
          </div>
        </div>
        
    </div>
</div>