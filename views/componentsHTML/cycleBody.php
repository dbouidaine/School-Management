<?php if(isset($args['TopNavbar'])) echo $args['TopNavbar']; ?>

<?php if(isset($args['Navbar'])) echo $args['Navbar']; ?>

<section class="container-xxl my-container">
    <center>
    <h1>Cycle <?= $args['cycle'];?></h1>
    </center>
    <div class="card-profile p-5 row justify-content-center">
        <div class="card m-2 p-0" style="width: 16rem;">
            <img class="card-img-top" src="<?=img('undraw/calendar.png');?>" alt="Card image cap">
            <div class="card-body m-auto text-center d-flex align-content-end flex-wrap">
                <a class="card-link" href="<?=url('cycle/'.$args['cycle'].'/calendars');?>" style="font-size: x-large;">Emplois du temps</a>
                <div class="pt-4">
                    <p></p>
                </div>
            </div>
        </div>
        <div class="card m-2 p-0" style="width: 16rem;">
            <img class="card-img-top" src="<?=img('undraw/teacher_home.png');?>" alt="Card image cap">
            <div class="card-body m-auto text-center d-flex align-content-end flex-wrap">
                <a class="card-link" href="#" style="font-size: x-large;">Enseignants</a>
                <div class="pt-4">
                    <p></p>
                </div>
            </div>
        </div>
        <div class="card m-2 p-0" style="width: 16rem;">
            <img class="card-img-top" src="<?=img('undraw/info.png');?>" alt="Card image cap">
            <div class="card-body m-auto text-center d-flex align-content-end flex-wrap">
                <a class="card-link" href="<?=url('cycle/'.$args['cycle'].'/infoPract');?>" style="font-size: x-large;">Infos Pratiques</a>
                <div class="pt-4">
                    <p></p>
                </div>
            </div>
        </div>
        <div class="card m-2 p-0" style="width: 16rem;">
            <img class="card-img-top" src="<?=img('undraw/restauration_home.png');?>" alt="Card image cap">
            <div class="card-body m-auto text-center d-flex align-content-end flex-wrap">
                <a class="card-link" href="<?=url('ecole/restauration');?>" style="font-size: x-large;">Restauration</a>
                <div class="pt-4">
                    <p></p>
                </div>
            </div>
        </div>
    </div>  
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

<?php if(isset($args['Footer'])) echo $args['Footer']; ?>