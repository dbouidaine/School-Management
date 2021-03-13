<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        <div>
            <h2 class="p-3">Restauration</h2>
        </div>
        <div class="card text-left p-5">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Jour</th>
                        <th>Plat d'entrée</th>
                        <th>Plat principal</th>
                        <th>Desserts</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($args['meals'] as $meal){?>
                    <tr class="align-middle">
                        <td class="text-center"><?=$meal['id'];?></td>
                        <td><?= $meal['day'] ;?></td>
                        <td><?=$meal['starter'];?></td>
                        <td><?=$meal['main'];?></td>
                        <td><?=$meal['dessert'];?></td>
                        <td class="td-actions text-right">
                            <div class="dropdown">
                                <div class="div-dropdown text-center p-2" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v" id="dropdownActions" aria-expanded="false"></i>
                                </div>
                                <ul class="dropdown-menu" aria-labelledby="dropdownActions">
                                    <li><a class="dropdown-item" href="<?=url('restauration/edit/'.$meal['id']);?>">Edit</a></li>
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