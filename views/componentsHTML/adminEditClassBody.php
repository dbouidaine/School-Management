<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        
        <h2 class="p-3">Gestion des classes</h2>
        <div class="card text-left p-5">
            <h4 class="card-title">Modifier Classe</h4>
            <hr>
            <div class="card-body">
            <form class="new-user form" action="<?=url('class/update')?>" method="POST">
                <input name="id" type="text" placeholder="id" value="<?=$args['class']['id'];?>" required hidden>
                <input name="name" type="text" placeholder="name" value="<?=$args['class']['name'];?>" required>
                <select name="year" id="" placeholde="year" required>
                    <?php foreach($args['years'] as $year){?>
                        <option value="<?= $year['name'];?>" <?php if($year['name']==$args['class']['year']) {echo "selected";}?> > <?=$year['name'];?> </option>
                    <?php } ?>
                </select>
                <button class="my-btn my-btn-blue float-end mt-5" type="submit" name="add_formation" id="form-btn">Update</button>
            </form>
          </div>
        </div>
        
    </div>
</div>