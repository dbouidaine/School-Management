<?php if(isset($args['TopNavbar'])) echo $args['TopNavbar']; ?>

<?php if(isset($args['Navbar'])) echo $args['Navbar']; ?>

<section class="container-xxl my-container">
    <center>
    <h1>Présentation de l'école</h1>
    </center>
    <div class="card-profile">
    <?php foreach($args['presentations'] as $presentation){?>
    <div class="p-5 home-presentation ">
        <hr>
        <p class=" text-black-75 text-lg-start"><?=htmlspecialchars($presentation['paragraph']);?></p>
        <?php if(!empty($presentation['image'])) { ?>
            <center>
            <div class="p-4">
                <img src="<?=img($presentation['image']);?>" alt="">
            </div>
            </center>
        <?php }?>
    </div>
    <?php }?>
    </div>  
</section>

<?php if(isset($args['Footer'])) echo $args['Footer']; ?>