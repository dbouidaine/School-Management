<?php if(isset($args['TopNavbar'])) echo $args['TopNavbar']; ?>

<section class="p-5">
    <?php if(isset($args['Carousel'])) echo $args['Carousel']; ?>
</section>

<?php if(isset($args['Navbar'])) echo $args['Navbar']; ?>

<section class="container-xxl my-container">
    <center>
    <div class="row">
        <?php 
        foreach($args as $arg){
            if(isset($args['Card'])) echo $args['Card'];
        } 
        ?>
    </div>
    <div class="justify-content-center pt-5">
        <?php if(isset($args['Pagination'])) echo $args['Pagination'];?>
    </div>
    </center>
</section>

<?php if(isset($args['Footer'])) echo $args['Footer']; ?>