<?php if(isset($args['TopNavbar'])) echo $args['TopNavbar']; ?>

<?php if(isset($args['Navbar'])) echo $args['Navbar']; ?>

<section class="container-xxl my-container">
    <center>
    <h1>Contacts:</h1>
    </center>
    <div class="card-profile p-5 row justify-content-center">
        <div class="card m-2 p-0" style="width: 20rem;">
            <img class="card-img-top" src="<?=img('undraw/telephone.png');?>" alt="Card image cap">
            <div></div>
            <div class="card-body m-auto text-center">
                <h4>Telephones</h4>
                <div class="pt-4 card-footer">
                <?php foreach($args['contacts'] as $contact){
                    if($contact['type']=='telephone') {?>
                        <p><?=$contact['contact'];?><br></p>
                    <?php }?>
                <?php }?>
                </div>
            </div>
        </div>
        <div class="card m-2 p-0" style="width: 20rem;">
            <img class="card-img-top" src="<?=img('undraw/email.png');?>" alt="Card image cap">
            <div></div>
            <div class="card-body m-auto text-center">
                <h4>Emails</h4>
                <div class="pt-4 card-footer">
                <?php foreach($args['contacts'] as $contact){
                    if($contact['type']=='email') {?>
                        <p><?=$contact['contact'];?><br></p>
                    <?php }?>
                <?php }?>
                </div>
            </div>
        </div>
        <div class="card m-2 p-0" style="width: 20rem;">
            <img class="card-img-top" src="<?=img('undraw/address.png');?>" alt="Card image cap">
            <div></div>
            <div class="card-body m-auto text-center">
                <h4>Adresses</h4>
                <div class="pt-4 card-footer">
                <?php foreach($args['contacts'] as $contact){
                    if($contact['type']=='address') {?>
                        <p><?=$contact['contact'];?><br></p>
                    <?php }?>
                <?php }?>
                </div>
            </div>
        </div>
        <div class="card m-2 p-0" style="width: 20rem;">
            <img class="card-img-top" src="<?=img('undraw/fax.png');?>" alt="Card image cap">
            <div></div>
            <div class="card-body m-auto text-center">
                <h4>Fax</h4>
                <div class="pt-4 card-footer">
                <?php foreach($args['contacts'] as $contact){
                    if($contact['type']=='fax') {?>
                        <p><?=$contact['contact'];?><br></p>
                    <?php }?>
                <?php }?>
                </div>
            </div>
        </div>
    </div>  
</section>

<?php if(isset($args['Footer'])) echo $args['Footer']; ?>