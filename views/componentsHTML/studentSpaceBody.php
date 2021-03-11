<?php if(isset($args['TopNavbar'])) {echo $args['TopNavbar'];} ?>

<?php if(isset($args['Navbar'])) {echo $args['Navbar'];} ?>

<section class="container-xxl my-container">
<center>

<div>
<div class="card card-profile p-5 text-break">
  <div class="card-body">
    <h4 class="text-dark float-start">Informations personnelles</h4>
    <br>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date De Naissance</th>
                <th>Class</th>
                <th>Année</th>
                <th>Cycle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$args['user']['id'];?></td>
                <td><?=$args['user']['last_name'];?></td>
                <td><?=$args['user']['first_name'];?></td>
                <td><?=$args['user']['birth'];?></td>
                <td><?=$args['user']['class'];?></td>
                <td><?=$args['user']['category'];?></td>
                <td><?=$args['user']['category'];?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <h4 class="text-dark float-start">Emploi du temps</h4>
    <br>
    <hr>
    <br>
    <br>
  </div>
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