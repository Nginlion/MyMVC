<?php

    class Core_Loader
    {
        private $_platformPath;
        private $_appPath;

        function __construct($platformPath, $appPath)
        {
            $this->_platformPath = $platformPath;
            $this->_appPath = $appPath;
        }

        public function loadClass($className)
        {
            $nodes = explode('_', $className);

            foreach ($nodes as &$node)
            {
                $node = ucfirst(strtolower($node));
            }

            $nodesLength = count($nodes);

            if ($nodesLength < 2)
            {
                throw new Core_Exception("{$className} not exist");
            }

            $path = str_replace('_', '/', $className) . '.php';
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

            throw new Core_Exception("File {$path} not exists");
        }
    }