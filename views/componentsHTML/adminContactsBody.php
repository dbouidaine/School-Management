<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        <div>
            <h2 class="p-3">Gestion des contacts</h2>
        </div>
        <div class="card text-left p-5">
            <h4 class="card-title">Ajouter Contact:</h4>
            <hr>
            <div class="card-body">  
                <form class="new-user form" action="<?=url('contact/add')?>" method="POST">
                    <input name="contact" type="text" placeholder="name" required>
                    <select name="type" id="" placeholde="type" required>
                        <?php $types=['telephone','email','fax','address'];?>
                        <option value="" selected disabled hidden>Type</option>
                        <?php
                            foreach($types as $type){
                                echo "<option value=\"". $type ."\">" . $type . "</option>";
                            }
                        ?>
                    </select>
                    <button class="my-btn my-btn-blue" type="submit" name="add_formation" id="form-btn">Ajouter Contact</button>
                </form>
            </div>
            <h4 class="card-title mt-4">Liste des contacts: </h4>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Contact</th>
                        <th>Type</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($args['contacts'] as $contact){?>
                    <tr class="align-middle">
                        <td class="text-center"><?=$contact['id'];?></td>
                        <td><?= $contact['contact'] ;?></td>
                        <td><?=$contact['type'];?></td>
                        <td class="td-actions text-right">
                            <div class="dropdown">
                                <div class="div-dropdown text-center p-2" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v" id="dropdownActions" aria-expanded="false"></i>
                                </div>
                                <ul class="dropdown-menu" aria-labelledby="dropdownActions">
                                    <li><a class="dropdown-item" href="<?=url('contact/edit/'.$contact['id']);?>">Edit</a></li>
                                    <li><a onclick="return confirm('Vous etes sur de supprimer la ligne?')" class="dropdown-item text-danger" href="<?=url('contact/delete/'.$contact['id']);?>">Delete</a></li>
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