<?php
    class Core_Exception extends Exception
    {
        function __construct($message = "", $code = 0, Exception $previous = null)
        {
            parent::__construct($message, $code, $previous);
        }
    }