<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        
        <h2 class="p-3">Presentation</h2>
        <div class="card p-5">
            <form action="<?=url('presentation/updateOrder');?>" method="POST">
                <?php $i=1;?>
                <?php foreach($args['presentation'] as $arg){?>
                <input class="order-input" type="text" name="<?=$arg['id'];?>" value="<?=$i;?>" hidden>
                <?php $i++;?>
                <?php }?>
                <a href="<?=url('presentation/new');?>" class="bg-blue my-btn my-btn-blue text-light float-end no-decoration">Ajouter Paragraph</a>
                <button type="submit" class="my-btn my-btn-black float-end"> Save Order</button>
            </form>
            <div id="paragraphs">
                <?php foreach($args['presentation'] as $arg){?>
                <div id-paragraph="<?=$arg['id'];?>"  class="card-body to-drag">
                    <div class="d-flex flex-fill text-break">
                        <div class="p-4 drag-btn d-flex align-items-center"><i class="fa fa-2x fa-bars"></i></div>
                        <div class="paragraph p-5 w-100">
                            <p>
                                <?=$arg['paragraph'];?>
                            </p>
                        </div>
                        <div class="dropdown">
                                <div class="div-dropdown text-center p-2" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v" id="dropdownActions" aria-expanded="false"></i>
                                </div>
                                <ul class="dropdown-menu" aria-labelledby="dropdownActions">
                                    <li><a class="dropdown-item" href="<?=url('presentation/edit/'.$arg['id']);?>">Show</a></li>
                                    <li><a class="dropdown-item" href="<?=url('presentation/edit/'.$arg['id']);?>">Edit</a></li>
                                    <li><a class="dropdown-item text-danger" href="<?=url('presentation/delete/'.$arg['id']);?>">Delete</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
        
    </div>
</div>