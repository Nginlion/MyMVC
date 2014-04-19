<?php
    define('APP_PATH', dirname(__FILE__));
    define('PLATFORM_PATH', dirname(dirname(APP_PATH)) . '/platform');

    require_once APP_PATH . '/Config/project.php';
    require_once PLATFORM_PATH . '/Core/Loader.php';

    try
    {
        $loader = new Core_Loader(PLATFORM_PATH, APP_PATH);
    }
    catch (Core_Exception $e)
    {
        if (SHOW_EXCEPTION)
        {
            echo $e->getMessage();
        }
    }