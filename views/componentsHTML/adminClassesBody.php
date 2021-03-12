<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        
        <h2 class="p-3">Gestion des classes</h2>
        <div class="card text-left p-5">
            <h4 class="card-title">Ajouter Classe</h4>
            <hr>
            <div class="card-body">  
                <form class="new-user form" action="<?=url('class/add')?>" method="POST">
                    <input name="name" type="text" placeholder="name" required>
                    <select name="year" id="" placeholde="year" required>
                        <option value="" selected disabled hidden>Année</option>
                        <?php
                            foreach($args['years'] as $year){
                                echo "<option value=\"". $year['name']."\">" . $year['name'] . "</option>";
                            }
                        ?>
                    </select>
                    <button class="my-btn my-btn-blue" type="submit" name="add_formation" id="form-btn">Ajouter Classe</button>
                </form>
            </div>
            <h4 class="card-title">Liste des classes: </h4>
            <hr>
            <table class="table text-break">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Class</th>
                        <th>Année</th>
                        <th>Cycle</th>
                        <th>ID emplois du temps</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($args['classes'] as $class){?>
                    <tr>
                        <td class="text-center"><?= $class['id'];?></td>
                        <td><?= $class['name'];?></td>
                        <td><?= $class['year'];?></td>
                        <td><?= $class['cycle'];?></td>
                        <td><?= $class['calendar'];?></td>
                        <td class="td-actions text-right">
                            <div class="dropdown">
                                <div class="div-dropdown text-center p-2" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v" id="dropdownActions" aria-expanded="false"></i>
                                </div>
                                <ul class="dropdown-menu" aria-labelledby="dropdownActions">
                                    <li><a class="dropdown-item" href="<?=url('class/edit/'.$class['id']);?>">Edit</a></li>
                                    <li><a class="dropdown-item" href="<?=url('class/'.$class['name'].'/modules');?>">Modules</a></li>
                                    <li><a class="dropdown-item" href="<?=url('class/'.$class['name'].'/calendar');?>">Calendrier</a></li>
                                    <li><a class="dropdown-item text-danger" href="<?=url('class/delete/'.$class['id']);?>">Delete</a></li>
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