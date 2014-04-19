<?php

    class Core_View
    {
        public static function render($data, $tpl, $returnString = false)
        {
            $tplPath = APP_PATH . '/View/' . $tpl;
            if (file_exists($tplPath))
            {
                extract($data);

                if ($returnString)
                {
                    ob_start();
                    include $tplPath;
                    $string = ob_get_contents();
                    ob_clean();

                    return $string;
                }

                include $tplPath;
            }
            else
            {
                throw new Core_Exception("Template file {$tpl} not exists!");
            }
        }
    }