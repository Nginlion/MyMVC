<?php

    class Controller_Aj_Add extends Core_Controller
    {
        public function run()
        {
            $nickname = Core_Request::post('nickname', '');
            $message = Core_Request::post('message', '');

            if (strlen($nickname) > 0 && strlen($message) > 0)
            {
                $model = new Model_Data();

                if ($model->addMessage($nickname, $message))
                {
                    Tool_Json::out(0, 'success');
                    return;
                }
            }

            Tool_Json::out(1, 'fail');
            return;
        }
    }