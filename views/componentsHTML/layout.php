
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $args['title'] ?></title>
    <link rel="stylesheet" href="assets/extern/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/extern/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/my-assets/css/custom.css">
    <?php if(isset($args['Head'])) echo $args['Head'] ?>
</head>
<body>
    
    <?php if(isset($args['HomeBody'])) echo $args['HomeBody'] ?>
    
    <?php if(isset($args['Script'])) echo $args['Script'] ?>
    <script type="text/JavaScript" src="assets/extern/js/jquery.min.js"></script>
    <script type="text/JavaScript" src="assets/extern/js/bootstrap.bundle.min.js"></script>
    <script type="text/JavaScript" src="assets/extern/js/fontawesome.min.js"></script>
    
</body>
</html>