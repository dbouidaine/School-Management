<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        
        <h2 class="p-3">Gestion des utilisateurs</h2>
        <div class="card text-left p-5">
            <div class="card-body">
                <h4 class="card-title">Ajouter Utilisateur</h4>
                <form class="new-user form" action="<?=url('user/add')?>" method="POST">
                    <input name="email" type="email" placeholder="email" autocomplete="off" autofocus="false" required>
                    <input pattern="[a-zA-z ]*" name="first_name" type="text" placeholder="first_name" required>
                    <input pattern="[a-zA-z ]*" name="last_name" type="text" placeholder="last_name" required>
                    <input name="password" type="password" placeholder="password" required>
                    <select name="role" id="" placeholde="role" required>
                        <option value="" selected disabled hidden>Role</option>
                        <?php
                            foreach($args['roles'] as $role){
                                echo "<option value=\"". $role['id']."\">" . $role['name'] . "</option>";
                            }
                        ?>
                    </select>
                    <button type="submit" name="add_formation" id="form-btn">New User</button>
                </form>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Email</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Role</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($args['users'] as $arg){?>
                    <tr draggable="true" class="align-middle">
                        <td class="text-center"><?=$arg['id'];?></td>
                        <!--<td>
                            <div class="m-2 table-img-rounded justify-content-center">
                                <img src="<?=$arg['image'];?>" height="100" alt="">
                            </div>
                        </td>-->
                        <td><?= $arg['email'] ;?></td>
                        <td><?= $arg['first_name'] ;?></td>
                        <td><?=$arg['last_name'];?></td>
                        <td><?=$arg['role'];?></td>
                        <td class="td-actions text-right">
                            <div class="dropdown">
                                <div class="div-dropdown text-center p-2" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v" id="dropdownActions" aria-expanded="false"></i>
                                </div>
                                <ul class="dropdown-menu" aria-labelledby="dropdownActions">
                                    <li><a class="dropdown-item" href="<?=url('user/show/'.$arg['id']);?>">Show</a></li>
                                    <li><a class="dropdown-item" href="<?=url('user/edit/'.$arg['id']);?>">Edit</a></li>
                                    <li><a class="dropdown-item text-danger" href="<?=url('user/delete/'.$arg['id']);?>">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="justify-content-center pt-5">
                <?php if(isset($args['Pagination'])) {echo $args['Pagination'];}?>
            </div>
        </div>
        
    </div>
</div>