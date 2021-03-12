<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        
        <h2 class="p-3">Gestion des utilisateurs</h2>
        <div class="card text-left p-5">
            <div class="card-body">
            <h4 class="card-title">Modifier Utilisateur</h4>
            <hr>
            <form class="new-user form" action="<?=url('user/update')?>" method="POST">
                <input name="id" type="text" placeholder="id" value="<?=$args['user']['id'];?>" required hidden>
                <input name="email" type="email" placeholder="email" value="<?=$args['user']['email'];?>" required>
                <input pattern="[a-zA-z ]*" name="first_name" type="text" placeholder="first_name" value="<?=$args['user']['first_name'];?>" required>
                <input pattern="[a-zA-z ]*" name="last_name" type="text" placeholder="last_name" value="<?=$args['user']['last_name'];?>" required>
                <input name="password" type="password" placeholder="password">
                <label for="role">Type: </label>
                <select name="role" id="" placeholde="role" required>
                    <?php foreach($args['roles'] as $role){?>
                            <option value="<?= $role['id'];?>" <?php if($role['id']==$args['user']['role']) {echo "selected";}?> > <?=$role['name'];?> </option>
                    <?php } ?>
                </select>
                <label for="class" <?php if($args['user']['role']!=3){?> hidden <?php }?>>Class:</label>
                <select name="class" id="" placeholde="class" <?php if($args['user']['role']!=3){?> hidden <?php }?> >
                    <?php foreach($args['classes'] as $class){?>
                            <option value="<?= $class['name'];?>" <?php if($class['name']==$args['user']['class']) {echo "selected";}?> > <?=$class['name'];?> </option>
                        <?php } ?>
                </select>
                <label for="category">Category:</label>
                <select name="category" id="" placeholde="Category" >
                    <?php foreach($args['categories'] as $category){?>
                            <option value="<?= $category['name'];?>" <?php if($category['name']==$args['user']['category']) {echo "selected";}?> > <?=$category['name'];?> </option>
                        <?php } ?>
                </select>
                <h5 class="mt-5">Informations Supplémentaires</h5>
                <hr>
                <label for="birth">Date de Naissance: </label>
                <input name="birth" type="date" placeholder="date de naissance" value="<?=$args['user']['birth'];?>">
                <input name="address" type="address" placeholder="Adresse" value="<?=$args['user']['address'];?>">
                <input name="phone_1" type="tel" placeholder="Telephone 1" pattern="[0-9]{10}" maxlength="10" minlength="10" value="<?=$args['user']['phone_1'];?>">
                <input name="phone_2" type="tel" placeholder="Telephone 2" value="<?=$args['user']['phone_2'];?>">
                <input name="phone_3" type="tel" placeholder="Telephone 3" value="<?=$args['user']['phone_3'];?>">
                <button class="my-btn my-btn-blue float-end mt-5" type="submit" name="add_formation" id="form-btn">Update</button>
            </form>
          </div>
        </div>
        
    </div>
</div>