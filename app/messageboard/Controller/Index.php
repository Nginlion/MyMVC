<?php

    class Controller_Index extends Core_Controller
    {
        public function run()
        {
            $data = array();
            $tpl = 'index.tpl';
            Core_View::render($data, $tpl);
        }
    }