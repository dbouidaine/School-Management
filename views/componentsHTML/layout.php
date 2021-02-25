
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $args['title'] ?></title>
    <link rel="stylesheet" href="<?=asset('extern/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?=asset('extern/css/fontawesome.min.css');?>">
    <link rel="stylesheet" href="<?=asset('my-assets/css/custom.css');?>">
    <?php if(isset($args['Head'])) {echo $args['Head'];} ?>
</head>
<body>
    
    <?php if(isset($args['Body'])) {echo $args['Body'];}?>
    
    <script type="text/JavaScript" src="<?=asset('extern/js/jquery.min.js');?>"></script>
    <script type="text/JavaScript" src="<?=asset('extern/js/bootstrap.bundle.min.js');?>"></script>
    <script type="text/JavaScript" src="<?=asset('extern/js/fontawesome.min.js');?>"></script>
    <script type="text/JavaScript" src="<?=asset('extern/js/Sortable.min.js');?>"></script>
    <script type="text/JavaScript" src="<?=asset('my-assets/js/custom.js');?>"></script>
    <?php if($args['title']=="Presentation") {echo '<script type="text/JavaScript" src="'.asset("my-assets/js/presentation.js").'"></script>';}?>
    <?php if(isset($args['Script'])) {echo $args['Script'];} ?>
    
</body>
</html>