<?php

    class Core_Request
    {
        public static function get($name, $defaultValue = '')
        {
            if (isset($_GET[$name]))
            {
                return $_GET[$name];
            }
            else
            {
                return $defaultValue;
            }
        }

        public static function post($name, $defaultValue = '')
        {
            if (isset($_POST[$name]))
            {
                return $_POST[$name];
            }
            else
            {
                return $defaultValue;
            }
        }
    }