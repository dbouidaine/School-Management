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
                <th scope="col">Prenom</th>
                <th scope="col">Date De Naissance</th>
                <th scope="col">Class</th>
                <th scope="col">Année</th>
                <th scope="col">Cycle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$args['user']['id'];?></td>
                <td><?=$args['user']['last_name'];?></td>
                <td><?=$args['user']['first_name'];?></td>
                <td><?=$args['user']['birth'];?></td>
                <td><?=$args['user']['class']['class_name'];?></td>
                <td><?=$args['user']['class']['year_name'];?></td>
                <td><?=$args['user']['class']['cycle_name'];?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <h4 class="text-dark float-start">Emploi du temps</h4>
    <br>
    <hr>
    <table class="table space-table">
        <thead>
            <tr>
                <th scope="col">Heure</th>
                <th scope="col">Dimanche</th>
                <th scope="col">Lundi</th>
                <th scope="col">Mardi</th>
                <th scope="col">Mercredi</th>
                <th scope="col">Jeudi</th>
                <th scope="col">Vendredi</th>
                <th scope="col">Samedi</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=intval($args['user']['calendar']['hours']['min']); $i<intval($args['user']['calendar']['hours']['max']);$i++){ ?>
            <tr>
                
                <td><?= intval($i) . 'h - '. intval($i+1) .'h';?></td>
                <?php for($j=1;$j<=7;$j++){?>
                    <?php $case=false;?>
                    <?php foreach($args['user']['calendar']['events'] as $event){?>
                        <?php if ($event['day']==$j && ($event['start']==intval($i) || $event['finish']==intval($i+1)) && !$case) {?>
                            <td><?=$event['module_name'];?></td>
                            <?php $case=true;?>
                        <?php }?>
                    <?php }?>
                    <?php if(!$case) print_r('<td>/</td>');?>
                <?php } ?>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <br>
    <h4 class="text-dark float-start">Notes</h4>
    <br>
    <hr>
    <table class="table space-table">
        <tbody>
            <tr>
                <th scope="row">Module:</th>
                <?php foreach($args['user']['marks'] as $mark){?>
                    <td><?=$mark['module_name'];?></td>
                <?php }?>
            </tr>
            <tr scope="row">
                <th scope="row">Note:</th>
                <?php foreach($args['user']['marks'] as $mark){?>
                    <td><?=$mark['mark'];?></td>
                <?php }?>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <h4 class="text-dark float-start">Les activités extrascolaires</h4>
    <br>
    <hr>
    <table class="table space-table">
        <tbody>
            <tr>
                <th scope="row">Activité:</th>
                <?php foreach($args['user']['activities'] as $activity){?>
                    <td><?=$activity['activity'];?></td>
                <?php }?>
            </tr>
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