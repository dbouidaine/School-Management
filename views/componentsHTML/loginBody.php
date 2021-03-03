<?php if(isset($args['TopNavbar'])) {echo $args['TopNavbar'];} ?>

<?php if(isset($args['Navbar'])) {echo $args['Navbar'];} ?>

<section class="container-xxl my-container">
<center>
    <div class="p-3">
        <div class="card col-6">
            <div class="card-header bg-light text-dark p-3" style="font-size:x-large ;">
                Login
            </div>
            <div class="card-body">
                <form class="my-form login" action="<?=url('user/login')?>" method="POST">
                    <input class="p-2 m-2" name="email" type="email" placeholder="email" required>
                    <input class="p-2 m-2" name="password" type="password" placeholder="password" required>
                    <div class="card-footer mt-4">
                        <button class="my-btn my-btn-blue py-2 px-3"  style="font-size:large ;" type="submit" name="add_formation" id="form-btn">Connecter</button>
                     </div>
                </form>
            </div>
        </div>
    </div>
</center>
</section>

<?php if(isset($args['Footer'])) {echo $args['Footer'];} ?>