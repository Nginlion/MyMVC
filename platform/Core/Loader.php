<?php

    class Core_Loader
    {
        private $_platformPath;
        private $_appPath;

        function __construct($platformPath, $appPath)
        {
            $this->_platformPath = $platformPath;
            $this->_appPath = $appPath;
            $this->init();
        }

        public function init()
        {
            spl_autoload_register('$this->loadClass');
        }

        public function loadClass($className)
        {
            $nodes = explode('_', $className);
            $nodesLength = count($nodes);

            if ($nodesLength < 2)
            {
                throw new Core_Exception("{$className} not exist");
            }

            $path = join('/', $nodes) . '.php';
            return $this->includeFile($path);
        }

        public function includeFile($path)
        {
            if (file_exists($this->_appPath . '/' . $path))
            {
                return include_once($this->_appPath . '/' . $path);
            }

            if (file_exists($this->_platformPath . '/' . $path))
            {
                return include_once($this->_platformPath . '/' . $path);
            }

            throw new Core_Exception("File {$path} not exist");
        }
    }