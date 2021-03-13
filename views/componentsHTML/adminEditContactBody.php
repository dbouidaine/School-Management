<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        
        <h2 class="p-3">Gestion des contacts</h2>
        <div class="card text-left p-5">
            <h4 class="card-title">Modifier Contact</h4>
            <hr>
            <div class="card-body">
            <form class="new-user form" action="<?=url('contact/update')?>" method="POST">
                <input name="id" type="text" placeholder="id" value="<?=$args['contact']['id'];?>" required hidden>
                <table class="table text-break">
                    <tbody>
                        <tr scope="row" >
                            <th>Contact</th>
                            <th>Type</th>
                        </tr>
                        <tr>
                            <td><input name="contact" type="text" placeholder="plat d'entrée" value="<?=$args['contact']['contact'];?>"></td>
                            <td>
                                <select name="type" id="" placeholde="type" required>
                                    <?php $types=['telephone','email','fax','address'];?>
                                    <?php foreach($types as $type){?>
                                        <option value="<?= $type;?>" <?php if($type==$args['contact']['type']) {echo "selected";}?> > <?=$type;?> </option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
                <button class="my-btn my-btn-blue float-end mt-5" type="submit" name="add_formation" id="form-btn">Update</button>
            </form>
          </div>
        </div>
        
    </div>
</div>