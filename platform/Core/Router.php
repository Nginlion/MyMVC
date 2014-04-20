<?php

    class Core_Router
    {
        private function _getController()
        {
            $uri = $_SERVER['PATH_INFO'];
            $uri = trim($uri, '/');
            $controllerNameArray = explode('/', $uri);
            $className = '';

            if (count($controllerNameArray) >= 1)
            {
                foreach ($controllerNameArray as $name)
                {
                    $className = $className . '_' . ucfirst(strtolower($name));
                }
            }
            else
            {
                $className = '_Index';
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