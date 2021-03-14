<?php if(isset($args['TopNavbar'])) echo $args['TopNavbar']; ?>

<?php if(isset($args['Navbar'])) echo $args['Navbar']; ?>

<section class="container-xxl my-container">
    <center>
    <h1>Calendriers du cycle <?=$args['cycle'];?>:</h1>
    </center>
    <div class="card-profile p-5 row justify-content-center calendars-for-cycle">
        <?php foreach($args['classes'] as $class){ ?>
            <div>
                <h4 class="text-dark float-start p-0 pb-1">Emploi du temps de classe: <?=$class['name'];?></h4>
                <br>
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
                        <?php for ($i=intval($args['calendars'][$class['name']]['hours']['min']); $i<intval($args['calendars'][$class['name']]['hours']['max']);$i++){ ?>
                        <tr>
                            
                            <td><?= intval($i) . 'h - '. intval($i+1) .'h';?></td>
                            <?php for($j=1;$j<=7;$j++){?>
                                <?php $case=false;?>
                                <?php foreach($args['calendars'][$class['name']]['events'] as $event){?>
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
            </div>
        <?php } ?>
    </div>  
</section>

<?php if(isset($args['Footer'])) echo $args['Footer']; ?>