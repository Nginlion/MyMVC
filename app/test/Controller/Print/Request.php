<?php

    class Controller_Print_Request extends Core_Controller
    {
        public function run()
        {
            $tpl = 'print.tpl';
            $data = array(
                'title' => 'GET POST SERVER',
            );
            Core_View::render($data, $tpl);
        }
    }