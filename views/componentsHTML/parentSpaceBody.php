<?php if(isset($args['TopNavbar'])) {echo $args['TopNavbar'];} ?>

<?php if(isset($args['Navbar'])) {echo $args['Navbar'];} ?>

<section class="container-xxl my-container">
<center>
<div class="card card-profile p-5 text-break">
  <div class="card-body">
    <h4 class="text-dark float-start">Informations personnelles</h4>
    <br>
    <hr>
    <table class="table space-table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Date De Naissance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$args['user']['id'];?></td>
                <td><?=$args['user']['last_name'];?></td>
                <td><?=$args['user']['first_name'];?></td>
                <td><?=$args['user']['birth'];?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <h4 class="text-dark float-start">Enfants</h4>
    <br>
    <hr>
    <table class="table space-table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Date De Naissance</th>
                <th scope="col">Classe</th>
                <th scope="col text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($args['user']['children'] as $child){?>
            <tr>
                <td><?=$child['id'];?></td>
                <td><?=$child['last_name'];?></td>
                <td><?=$child['first_name'];?></td>
                <td><?=$child['birth'];?></td>
                <td><?=$child['class']?></td>
                <td class="td-actions text-center">
                    <div class="dropdown">
                        <div class="div-dropdown p-2" data-bs-toggle="dropdown">
                            <i class="fas fa-ellipsis-v" id="dropdownActions" aria-expanded="false"></i>
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownActions">
                            <li><a class="dropdown-item" href="<?=url('space/parent/child/'.$child['id']);?>">Profile</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <br>
    <br>
    <h4 class="text-dark float-start">Remarques:</h4>
    <br>
    <hr>
    <table class="table space-table">
        <thead>
            <tr>
                <th scope="col">ID_Enfant</th>
                <th scope="col">Nom Enfant</th>
                <th scope="col">Prénom Enfant</th>
                <th scope="col">Nom Prof</th>
                <th scope="col">Prénom Prof</th>
                <th scope="col">Remarque</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($args['user']['children_remarks'] as $remark){?>
            <tr>
                <td><?=$remark['child_id'];?></td>
                <td><?=$remark['child_first_name'];?></td>
                <td><?=$remark['child_last_name'];?></td>
                <td><?=$remark['teacher_first_name'];?></td>
                <td><?=$remark['teacher_last_name'];?></td>
                <td><?=$remark['remark'];?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <br>
    <br>
  </div>
</div>
</center>
</section>

<hr>

<section class="container-xxl my-container">
    <center>
    <h2 class="p-3 text-dark">Articles intéressant</h2>
    <br>
    <div class="row">
        <?php 
        if(isset($args['Articles'])) {echo $args['Articles'];}
        ?>
    </div>
    <div class="justify-content-center pt-5">
        <?php if(isset($args['Pagination'])) {echo $args['Pagination'];}?>
    </div>
    </center>
</section>

<?php if(isset($args['Footer'])) {echo $args['Footer'];} ?>