<?php
    class Core_Router
    {
        private function _getController()
        {
            $uri = $_SERVER['PATH_INFO'];
            $controllerNameArray = explode('/', $uri);
            $className = '';

            foreach ($controllerNameArray as &$name)
            {
                $className = $className . ucfirst(strtolower($name)) . '_';
            }

            $className = $className . 'Controller';
            return new $className;
        }

        public function exec()
        {
            $class = $this->_getController();
            $class->beforeRun();
            $class->run();
            $class->afterRun();
        }
    }