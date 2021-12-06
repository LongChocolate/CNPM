<?php
    $supported_controllers = array(
        'staff' => array('index','view','edit','create','delete','save'),
        'admin' => array('index','delete','edit'),
        'pages' => array('error')
    );
    if (!array_key_exists($controller, $supported_controllers) || !in_array($action,$supported_controllers[$controller]))
    {
        $controller = 'pages';
        $action = 'error';
    }
    include_once('controllers/'.$controller.'_controller.php');
    $className = ucfirst($controller)."Controller";
    $page = new $className();
    $page->$action($action,$class);
?>