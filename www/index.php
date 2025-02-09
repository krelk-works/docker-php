<?php

require_once "autoload.php";



session_start();

// Si no hay una sesión iniciada, se redirige al login
if (!isset($_SESSION['user']) && $_GET['controller'] != 'LoginController') {
    // header('Location: ?controller=LoginController&action=login');
    echo '<meta http-equiv="Refresh" content="0; url=?controller=LoginController&action=login">';
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba CRUD</title>
</head>
<body>
    <h1>Prueba CRUD</h1>

    <?php

    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
        $action = $_GET['action'];
        if (class_exists($controller)) {
            $controller = new $controller;
            $controller->$action();
        } else {
            echo "La página que buscas no existe";
        }
    } else {
        $controller = 'UsersController';
        $action = 'index';
        $controller = new $controller;
        $controller->$action();
    }

    ?>
</body>
</html>