<?php

    class Controller_Index extends Core_Controller
    {
        public function run()
        {
            $data = array(
                'messages' => array(),
            );
            $model = new Model_Data();
            $ret = $model->readMessages();

            if ($ret)
            {
                $data = array(
                    'messages' => $ret,
                );
            }

            $tpl = 'index.tpl';
            Core_View::render($data, $tpl);
        }
    }