<?php

    define('APP_PATH', dirname(__FILE__));
    define('PLATFORM_PATH', dirname(dirname(APP_PATH)) . '/platform');

    require_once PLATFORM_PATH . '/Config/basic.php';
    require_once APP_PATH . '/Config/project.php';

    try
    {
        $router = new Core_Router();
        $router->exec();
    }
    catch (Core_Exception $e)
    {
        if (SHOW_EXCEPTION)
        {
            echo $e->getMessage();
        }
    }