<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        
        <h2 class="p-3">Gestion des utilisateurs</h2>
        <div class="card text-left p-5">
            <div class="card-body">
            <h4 class="card-title">Modifier Utilisateur</h4>
            <form class="new-user form" action="<?=url('user/update')?>" method="POST">
                <input name="id" type="text" placeholder="id" value="<?=$args['user']['id'];?>" required hidden>
                <input name="email" type="email" placeholder="email" value="<?=$args['user']['email'];?>" required>
                <input pattern="[a-zA-z ]*" name="first_name" type="text" placeholder="first_name" value="<?=$args['user']['first_name'];?>" required>
                <input pattern="[a-zA-z ]*" name="last_name" type="text" placeholder="last_name" value="<?=$args['user']['last_name'];?>" required>
                <input name="password" type="password" placeholder="password">
                <select name="role" id="" placeholde="role" required>
                    <?php foreach($args['roles'] as $role){?>
                            <option value="<?= $role['id'];?>" <?php if($role['id']==$args['user']['role']) {echo "selected";}?> > <?=$role['name'];?> </option>
                        <?php } ?>
                    ?>
                </select>
                <button class="my-btn my-btn-blue" type="submit" name="add_formation" id="form-btn">Update</button>
            </form>
          </div>
        </div>
        
    </div>
</div>