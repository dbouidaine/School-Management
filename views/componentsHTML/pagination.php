<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <?php if($args['page']==1) { ?>
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <?php }else{ ?>
    <li class="page-item"><a class="page-link" href="<?=url('home/').$args['page']-1 ;?>" >Previous</a></li>
    <?php } ?>
    <?php for($i=1;$i<=$args['page_count'];$i++){ 
      if($i==$args['page']) {?>
    <li class="page-item active"><a class="page-link bg-blue" href="<?=url('home/').$i ;?>" ><?= $i;?></a></li>
    <?php } else {?>
    <li class="page-item"><a class="page-link" href="<?=url('home/').$i;?>"><?=$i;?></a></li>
    <?php } ?>
    <?php } ?>
    <?php if($args['page']==$args['page_count']) { ?>
    <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
    <?php }else{ ?>
    <li class="page-item"><a class="page-link" href="<?=url('home/').$args['page']+1 ;?>" >Next</a></li>
    <?php } ?>
  </ul>
</nav>