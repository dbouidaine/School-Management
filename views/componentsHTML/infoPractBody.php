<?php if(isset($args['TopNavbar'])) echo $args['TopNavbar']; ?>

<?php if(isset($args['Navbar'])) echo $args['Navbar']; ?>

<section class="container-xxl my-container">
    <center>
    <h1>Infos Pratiques:</h1>
    </center>
    <div class="card-profile p-5 row justify-content-around">
        <?php foreach($args['info_pract'] as $info){ ?>
        <div class="card m-2 p-0" style="width: 20rem;">
            <div class="card-body m-auto text-center">
                <h4><?=$info['title'];?></h4>
                <div class="pt-4 card-footer">
                    <p><?=$info['info'];?></p>
                </div>
            </div>
            <div class="card-footer text-center"><?=$info['created_at'];?></div>
        </div>
        <?php } ?>
    </div>  
</section>

<?php if(isset($args['Footer'])) echo $args['Footer']; ?>