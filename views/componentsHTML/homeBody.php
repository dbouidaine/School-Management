<?php if(isset($args['TopNavbar'])) echo $args['TopNavbar']; ?>

<section class="p-5">
    <?php if(isset($args['Carousel'])) echo $args['Carousel']; ?>
</section>

<?php if(isset($args['Navbar'])) echo $args['Navbar']; ?>

<section class="container-xxl my-container">
    <center>
    <div class="row">
        <?php 
        if(isset($args['Articles'])) echo $args['Articles'];
        ?>
    </div>
    <div class="justify-content-center pt-5">
        <?php if(isset($args['Pagination'])) echo $args['Pagination'];?>
    </div>
    </center>
</section>

<?php if(isset($args['Footer'])) echo $args['Footer']; ?>