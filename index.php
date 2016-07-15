<?php

//FRONT CONTROLLER
require __DIR__ . '/components/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

try {
    $controllerClassName = $ctrl . 'Controller';
    $controller = new $controllerClassName;
    $method = 'action' . $act;
    $controller->$method();
} catch (PDOException $e) {
    $log = new PDOLogger();
    $log->saveError($e, $h = 403);

    http_response_code(403);
    $view = new View();
    $view->display('403.php');
} catch (E404Ecxeption $e) {
    $log = new PDOLogger();
    $log->saveError($e, $h = 404);

    http_response_code(404);
    $view = new View();
    $view->display('404.php');
}



