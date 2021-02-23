<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        
        <h2 class="p-3">Gestion des articles</h2>
        <div class="card text-left p-5">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>image</th>
                        <th>title</th>
                        <th>Description</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($args['articles'] as $arg){?>
                    <tr class="align-middle">
                        <td class="text-center"><?=$arg['id'];?></td>
                        <td>
                            <div class="m-2 table-img-rounded justify-content-center">
                                <img src="<?=$arg['image'];?>" height="100" alt="">
                            </div>
                        </td>
                        <td><?= $arg['title'] ;?></td>
                        <td><?=$arg['description'];?> ... </td>
                        <td class="td-actions text-right">
                            <div class="dropdown">
                                <div class="div-dropdown text-center p-2" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v" id="dropdownActions" aria-expanded="false"></i>
                                </div>
                                <ul class="dropdown-menu" aria-labelledby="dropdownActions">
                                    <li><a class="dropdown-item" href="<?=url('article/show/'.$arg['id']);?>">Show</a></li>
                                    <li><a class="dropdown-item">Edit</a></li>
                                    <li><a class="dropdown-item text-danger" href="<?=url('article/delete/'.$arg['id']);?>">Delete</a></li>
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