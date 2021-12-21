<?php
    
    $supported_controllers = array(
        'nhanvienbanhang' => array('index','view','edit','create','delete','save'),
        'quanli' => array('index','delete','edit','create','view'),
        'nhanvienkho' => array('index','delete','edit','add','create'),
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
    $page->$action($action,ucfirst($class));
?>