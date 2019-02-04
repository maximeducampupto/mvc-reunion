<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Reunion Island</title>
</head>
<body>

<div class="container">

    <?php

    $req_controller = $_REQUEST['controller'];
    $action = $_REQUEST['action'];

    switch($req_controller)
    {
        case 'rando':
            require('../models/Hike.php');
            require('../controllers/HikesController.php');

            $controller = new HikesController();



            switch($action)
            {
                case 'index':
                    $controller->index();
                    break;
                case 'create':
                    $controller->create();
                    break;
                case 'delete':
                    $controller->delete();
                    break;
                case 'update':
                    $controller->update();
                    break;
                default:
                    $controller->index();
            }
    }
    ?>
    </div>

</body>
</html>

