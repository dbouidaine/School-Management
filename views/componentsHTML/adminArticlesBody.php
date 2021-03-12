<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        <div>
            <h2 class="p-3">Gestion des articles</h2>
        </div>
        <div class="card text-left p-5">
            <div class="new-article m-1">
                <a href="<?=url('article/new')?>" class="float-end text-light no-decoration my-btn my-btn-blue">Ajouter Article</a>
            </div>
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
                                <img src="<?=img($arg['image']);?>" height="100" alt="">
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
                                    <li><a class="dropdown-item" href="<?=url('article/edit/'.$arg['id']);?>">Edit</a></li>
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