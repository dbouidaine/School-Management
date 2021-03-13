<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        
        <h2 class="p-3">Restauration</h2>
        <div class="card text-left p-5">
            <h4 class="card-title">Modifier Restauration</h4>
            <hr>
            <div class="card-body">
            <form class="new-user form" action="<?=url('restauration/update')?>" method="POST">
                <input name="id" type="text" placeholder="id" value="<?=$args['meal']['id'];?>" required hidden>
                <table class="table text-break">
                    <tbody>
                        <tr scope="row" >
                            <th>Plat d'entree</th>
                            <th>Plat principal</th>
                            <th>Dessert</th>
                        </tr>
                        <tr>
                            <td><input name="starter" type="text" placeholder="plat d'entrée" value="<?=$args['meal']['starter'];?>"></td>
                            <td><input name="main" type="text" placeholder="Plat principal" value="<?=$args['meal']['main'];?>"></td>
                            <td><input name="dessert" type="text" placeholder="Dessert" value="<?=$args['meal']['dessert'];?>"></td>
                        </tr>
                       
                    </tbody>
                </table>
                <button class="my-btn my-btn-blue float-end mt-5" type="submit" name="add_formation" id="form-btn">Update</button>
            </form>
          </div>
        </div>
        
    </div>
</div>