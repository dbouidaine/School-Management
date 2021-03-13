<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        
        <h2 class="p-3">Gestion de l'emploi du temps pour la class: <b><?=$args['class_name'];?></b> </h2>
        <div class="card text-left p-4">
          <img class="card-img-top" alt="">
          <div class="card-body">
            <h4 class="text-dark">Ajouter Ligne:</h4>
            <hr>
            <form class="new-user form" action="<?= url('calendar/addLine');?> " method="POST">
                <input type="text" placeholder="calendar_id" value="<?=$args['calendar']['calendar_id'];?>" hidden name="calendar_id">
                <input type="text" required placeholder="class_name" value="<?=$args['class_name'];?>" hidden name="class_name">
                <input pattern="[0-9]+" maxlength="2" type="text" required placeholder="debut" name="start">
                <input maxlength="2" pattern="[0-9]+" type="text" required placeholder="fin" name="finish">
                <br>
                <select name="1" id="" placeholde="dimanche">
                    <option value="" selected disabled hidden>Dimanche</option>
                    <?php
                        foreach($args['modules'] as $module){
                            echo "<option value=\"". $module['module']."\">" . $module['name'] . "</option>";
                        }
                    ?>
                </select>
                <select name="2" id="" placeholde="dimanche">
                    <option value="" selected disabled hidden>Lundi</option>
                    <?php
                        foreach($args['modules'] as $module){
                            echo "<option value=\"". $module['module']."\">" . $module['name'] . "</option>";
                        }
                    ?>
                </select>
                <select name="3" id="" placeholde="dimanche">
                    <option value="" selected disabled hidden>Mardi</option>
                    <?php
                        foreach($args['modules'] as $module){
                            echo "<option value=\"". $module['module']."\">" . $module['name'] . "</option>";
                        }
                    ?>
                </select>
                <select name="4" id="" placeholde="dimanche">
                    <option value="" selected disabled hidden>Mercredi</option>
                    <?php
                        foreach($args['modules'] as $module){
                            echo "<option value=\"". $module['module']."\">" . $module['name'] . "</option>";
                        }
                    ?>
                </select>
                <select name="5" id="" placeholde="dimanche">
                    <option value="" selected disabled hidden>Jeudi</option>
                    <?php
                        foreach($args['modules'] as $module){
                            echo "<option value=\"". $module['module']."\">" . $module['name'] . "</option>";
                        }
                    ?>
                </select>
                <select name="6" id="" placeholde="dimanche">
                    <option value="" selected disabled hidden>Vendredi</option>
                    <?php
                        foreach($args['modules'] as $module){
                            echo "<option value=\"". $module['module']."\">" . $module['name'] . "</option>";
                        }
                    ?>
                </select>
                <select name="7" id="" placeholde="dimanche">
                    <option value="" selected disabled hidden>Samedi</option>
                    <?php
                        foreach($args['modules'] as $module){
                            echo "<option value=\"". $module['module']."\">" . $module['name'] . "</option>";
                        }
                    ?>
                </select>
                <button type="submit" name="addLineCalendar" class="my-btn my-btn-blue">Ajouter Ligne</button>
            </form>
            <br>
            <?php if(isset($args['calendar']['calendar_id'])) {?>
            <form class="new-user form" action="<?=url('calendar/delete/'.$args['calendar']['calendar_id']);?>">
                <button onclick="return confirm('Vous etes sur de supprimer le calendrier?')" class="my-btn my-btn-dark bg-danger float-end">Supprimer Calendrier</button>
            </form>
            <?php }?>
            <h4 class="text-dark float-start">Emploi du temps</h4>
            <br>
            <hr>
            <table class="table space-table editable text-break">
                <thead>
                    <tr>
                        <th scope="col">Heure</th>
                        <th scope="col">Dimanche</th>
                        <th scope="col">Lundi</th>
                        <th scope="col">Mardi</th>
                        <th scope="col">Mercredi</th>
                        <th scope="col">Jeudi</th>
                        <th scope="col">Vendredi</th>
                        <th scope="col">Samedi</th>
                        <th scope="col text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i=intval($args['calendar']['hours']['min']); $i<intval($args['calendar']['hours']['max']);$i++){ ?>
                    <tr>
                        <td><?= intval($i) . 'h - '. intval($i+1) .'h';?></td>
                        <?php for($j=1;$j<=7;$j++){?>
                            <?php $case=false;?>
                            <?php foreach($args['calendar']['events'] as $event){?>
                                <?php if ($event['day']==$j && ($event['start']==intval($i) || $event['finish']==intval($i+1)) && !$case) {?>
                                    <td><?=$event['module_name'];?></td>
                                    <?php $case=true;?>
                                <?php }?>
                            <?php }?>
                            <?php if(!$case) print_r('<td>/</td>');?>
                        <?php } ?>
                        <td class="td-actions text-right">
                            <div class="dropdown">
                                <div class="div-dropdown text-center p-2" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v" id="dropdownActions" aria-expanded="false"></i>
                                </div>
                                <ul class="dropdown-menu" aria-labelledby="dropdownActions">
                                    <li><a onclick="return confirm('Vous etes sur de supprimer la ligne?')" class="dropdown-item text-danger" href="<?=url('calendar/'.$args['calendar']['calendar_id'].'/delete/line/'.$i);?>">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
          </div>
        </div>  
    </div>
</div>