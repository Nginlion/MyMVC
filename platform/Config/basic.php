<?php
    require_once dirname(dirname(__FILE__)) . '/Core/Exception.php';
    require_once PLATFORM_PATH . '/Core/Loader.php';

    function loadClass($className)
    {
        $loader = new Core_Loader(PLATFORM_PATH, APP_PATH);
        $loader->loadClass($className);
    }

    spl_autoload_register('loadClass');