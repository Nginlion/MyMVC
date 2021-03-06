<?php

    class Core_Router
    {
        private function _getController()
        {
            $uri = $_SERVER['PATH_INFO'];
            $uri = trim($uri, '/');
            $className = '';

            if ('' == $uri)
            {
                $className = '_Index';
            }
            else
            {
                $controllerNameArray = explode('/', $uri);

                foreach ($controllerNameArray as $name)
                {
                    $className = $className . '_' . ucfirst(strtolower($name));
                }
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