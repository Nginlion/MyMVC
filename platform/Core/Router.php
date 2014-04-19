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
                $className = '_' . $className . ucfirst(strtolower($name));
            }

            $className =  'Controller' . $className;
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