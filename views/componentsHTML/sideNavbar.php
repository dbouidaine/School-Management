<nav class="side-navbar bg-blue align-items-center" style="display:none;">
    <h3 class="bg-dark text-white sidenav-header p-4 text-center zindex-1000">Ecotech school</h3>
    <ul class="list-unstyled align-items-center">
        <li class="nav-item">
            <a href="<?=url('admin/articles');?>">Articles</a>
        </li>
        <li class="nav-item">
            <a href="<?=url('admin/presentation');?>">Presentation</a>
        </li>
        <li class="nav-item">
            <a href="<?=url('admin/classes');?>">Classes</a>
        </li>
        <li class="nav-item">
            <a href="">Enseignants</a>
        </li>
        <li class="nav-item">
            <a href="<?=url('admin/users');?>">Utilisateurs</a>
        </li>
        <li class="nav-item">
            <a href="nav-link">Restauration</a>
        </li>
        <li class="nav-item">
            <a href="nav-link">Contact</a>
        </li>
        <li class="nav-item">
            <a href="nav-link">Parametres</a>
        </li>
        <?php if(isset($_SESSION['user'])){?>
            <li class="nav-item bg-h-dark">
              <a class="nav-link bg-dark text-light" href="<?=url('user/logout')?>">Logout</a>
            </li>
        <?php } ?>
    </ul>
</nav>
<a href="##" id="sidenav_toggle" class="text-light bg-blue p-4"><i class="fa fa-2x fa-bars to-rotate" aria-hidden="true"></i></a>