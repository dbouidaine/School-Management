<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
        
        <h2 class="p-3">Dashboard Admin</h2>
        <div class="row justify-content-center">
            <div class="card m-2 p-0" style="width: 20rem;">
              <img class="card-img-top" src="<?=img('undraw/articles.png');?>" alt="Card image cap">
              <div class="card-body m-auto d-flex align-content-end flex-wrap">
                <a class="card-link" href="<?=url('admin/articles');?>" style="font-size: x-large;">Articles</a>
              </div>
            </div>
            <div class="card m-2 p-0" style="width: 20rem;">
              <img class="card-img-top" src="<?=img('undraw/presentation.png');?>" alt="Card image cap">
              <div class="card-body m-auto d-flex align-content-end flex-wrap">
                <a class="card-link" href="<?=url('admin/presentation');?>" style="font-size: x-large;">Présentation</a>
              </div>
            </div>
            <div class="card m-2 p-0" style="width: 20rem;">
              <img class="card-img-top" src="<?=img('undraw/classes.png');?>" alt="Card image cap">
              <div class="card-body m-auto d-flex align-content-end flex-wrap">
                <a class="card-link" href="<?=url('admin/classes');?>" style="font-size: x-large;">Classes</a>
              </div>
            </div>
            <div class="card m-2 p-0" style="width: 20rem;">
              <img class="card-img-top" src="<?=img('undraw/teachers.png');?>" alt="Card image cap">
              <div class="card-body m-auto d-flex align-content-end flex-wrap">
                <a class="card-link" href="<?=url('admin/teachers');?>" style="font-size: x-large;">Enseigants</a>
              </div>
            </div>
            <div class="card m-2 p-0" style="width: 20rem;">
              <img class="card-img-top" src="<?=img('undraw/users.png');?>" alt="Card image cap">
              <div class="card-body m-auto d-flex align-content-end flex-wrap">
                <a class="card-link" href="<?=url('admin/users');?>" style="font-size: x-large;">Utilisateurs</a>
              </div>
            </div>
            <div class="card m-2 p-0" style="width: 20rem;">
              <img class="card-img-top" src="<?=img('undraw/restauration.png');?>" alt="Card image cap">
              <div class="card-body m-auto d-flex align-content-end flex-wrap">
                <a class="card-link" href="<?=url('admin/restauration');?>" style="font-size: x-large;">Restauration</a>
              </div>
            </div>
            <div class="card m-2 p-0" style="width: 20rem;">
              <img class="card-img-top" src="<?=img('undraw/contact.png');?>" alt="Card image cap">
              <div class="card-body m-auto d-flex align-content-end flex-wrap">
                <a class="card-link" href="<?=url('admin/contacts');?>" style="font-size: x-large;">Contacts</a>
              </div>
            </div>
            <div class="card m-2 p-0" style="width: 20rem;">
              <img class="card-img-top" src="<?=img('undraw/settings.png');?>" alt="Card image cap">
              <div class="card-body m-auto d-flex align-content-end flex-wrap">
                <a class="card-link" href="<?=url('admin/settings');?>" style="font-size: x-large;">Paramêtres</a>
              </div>
            </div>
        </div>        
    </div>
</div>