<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-blue menu">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <div class="d-flex col-12 justify-content-between">
        <div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="<?=url('');?>">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?=url('ecole/presentation');?>">Présentation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?=url('ecole/cycle-primaire');?>">Cycle Primaire</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?=url('ecole/cycle-moyen');?>">Cycle Moyen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?=url('ecole/cycle-secondaire');?>">Cycle Secondaire</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?=url('espace-eleves');?>">Espace Elèves</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?=url('espace-parents');?>">Espace Parents</a>
            </li>
          </ul>
        </div>
        <div>
          <ul class="navbar-nav">
            <?php if(isset($_SESSION['user'])){ ?>
            <li class="nav-item">
              <a class="nav-link text-light" href="/user/logout">Logout</a>
            </li>
            <?php } else {?>
            <li class="nav-item">
              <a class="nav-link text-light" href="/login">Login</a>
            </li>
            <?php } ?>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?=url('contact');?>">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>