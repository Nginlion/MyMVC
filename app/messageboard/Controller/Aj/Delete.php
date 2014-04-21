<?php

    class Controller_Aj_Delete extends Core_Controller
    {
        public function run()
        {
            $id = Core_Request::post('id', '');

            if ($id)
            {
                $model = new Model_Data();

                if ($model->deleteMessage($id))
                {
                    Tool_Json::out(0, 'success');
                    return;
                }
            }

            Tool_Json::out(1, 'fail');
            return;
        }
    }