<?php if(isset($args['TopNavbar'])) echo $args['TopNavbar']; ?>

<?php if(isset($args['Navbar'])) echo $args['Navbar']; ?>

<section class="container-xxl my-container">
    <center>
    <h1>Restauration:</h1>
    </center>
    <div class="card-profile p-5 row justify-content-around">       
        <div class="card m-2 p-0" style="width: 18rem;">
            <img class="card-img-top" src="<?=img('undraw/restauration_home.png');?>" alt="Card image cap">
            <div class="card-body m-auto text-center">
                <h4>Dimanche</h4>
                <div class="pt-4 card-footer">
                    <p><b>Plat d'entrée:</b><br><?=$args['meals']['0']['starter'];?><br></p>
                    <p><b>Plat principal:</b><br><?=$args['meals']['0']['main'];?><br></p>
                    <p><b>Dessert:</b><br><?=$args['meals']['0']['dessert'];?><br></p>
                </div>
            </div>
        </div>
        <div class="card m-2 p-0" style="width: 18rem;">
            <img class="card-img-top" src="<?=img('undraw/restauration_home.png');?>" alt="Card image cap">
            <div class="card-body m-auto text-center">
                <h4>Lundi</h4>
                <div class="pt-4 card-footer">
                    <p><b>Plat d'entrée</b><br><?=$args['meals']['1']['starter'];?><br></p>
                    <p><b>Plat principal</b><br><?=$args['meals']['1']['main'];?><br></p>
                    <p><b>Dessert</b><br><?=$args['meals']['1']['dessert'];?><br></p>
                </div>
            </div>
        </div>
        <div class="card m-2 p-0" style="width: 18rem;">
            <img class="card-img-top" src="<?=img('undraw/restauration_home.png');?>" alt="Card image cap">
            <div class="card-body m-auto text-center">
                <h4>Mardi</h4>
                <div class="pt-4 card-footer">
                    <p><b>Plat d'entrée</b><br><?=$args['meals']['2']['starter'];?><br></p>
                    <p><b>Plat principal</b><br><?=$args['meals']['2']['main'];?><br></p>
                    <p><b>Dessert</b><br><?=$args['meals']['2']['dessert'];?><br></p>
                </div>
            </div>
        </div>
        <div class="card m-2 p-0" style="width: 18rem;">
            <img class="card-img-top" src="<?=img('undraw/restauration_home.png');?>" alt="Card image cap">
            <div class="card-body m-auto text-center">
                <h4>Mercredi</h4>
                <div class="pt-4 card-footer">
                    <p><b>Plat d'entrée:</b><br><?=$args['meals']['3']['starter'];?><br></p>
                    <p><b>Plat principal:</b><br><?=$args['meals']['3']['main'];?><br></p>
                    <p><b>Dessert:</b><br><?=$args['meals']['3']['dessert'];?><br></p>
                </div>
            </div>
        </div>
        <div class="card m-2 p-0" style="width: 18rem;">
            <img class="card-img-top" src="<?=img('undraw/restauration_home.png');?>" alt="Card image cap">
            <div class="card-body m-auto text-center">
                <h4>Jeudi</h4>
                <div class="pt-4 card-footer">
                    <p><b>Plat d'entrée:</b><br><?=$args['meals']['4']['starter'];?><br></p>
                    <p><b>Plat principal:</b><br><?=$args['meals']['4']['main'];?><br></p>
                    <p><b>Dessert:</b><br><?=$args['meals']['4']['dessert'];?><br></p>
                </div>
            </div>
        </div>
    </div>  
</section>

<?php if(isset($args['Footer'])) echo $args['Footer']; ?>