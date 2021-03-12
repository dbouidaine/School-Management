<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        
        <h2 class="p-3">Gestion des Modules pour la classe : <b><?=$args['class_name'];?></b> </h2>
        <div class="card text-left p-5">
            <h4 class="card-title">Ajouter Module</h4>
            <hr>
            <div class="card-body">
                <form class="new-user form" action="<?=url('module/add')?>" method="POST">
                    <input name="class" type="text" placeholder="name" required hidden value="<?=$args['class_name'];?>" >
                    <input name="name" type="text" placeholder="name" required>
                    <select name="year" id="" placeholde="year" required>
                        <option value="" selected disabled hidden>Année</option>
                        <?php
                            foreach($args['years'] as $year){
                                echo "<option value=\"". $year['name']."\">" . $year['name'] . "</option>";
                            }
                        ?>
                    </select>
                    <button class="my-btn my-btn-blue" type="submit" name="add_formation" id="form-btn">Ajouter Module</button>
                </form>
            </div>
            <h4 class="card-title">Liste des modules: </h4>
            <hr>
            <table class="table text-break">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Nom</th>
                        <th>Année</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($args['modules'] as $module){?>
                    <tr>
                        <td class="text-center"><?= $module['id'];?></td>
                        <td><?= $module['name'];?></td>
                        <td><?= $module['year'];?></td>
                        <td class="td-actions text-right">
                            <div class="dropdown">
                                <div class="div-dropdown text-center p-2" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v" id="dropdownActions" aria-expanded="false"></i>
                                </div>
                                <ul class="dropdown-menu" aria-labelledby="dropdownActions">
                                    <li><a class="dropdown-item text-danger" href="<?=url('module/delete/'.$module['id']);?>">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>