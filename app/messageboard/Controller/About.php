<?php

    class Controller_About extends Core_Controller
    {
        public function run()
        {
            $data = array(
                'about' => 'MVC Homework',
            );
            $tpl = 'about.tpl';
            Core_View::render($data, $tpl);
        }
    }