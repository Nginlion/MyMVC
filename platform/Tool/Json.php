<?php

    class Tool_Json
    {
        public static function out($code = 0, $msg = '', $data = '')
        {
            header('Content-type: application/json');
            $ret = array(
                'code' => $code,
                'msg'  => $msg,
                'data' => $data,
            );
            echo json_encode($ret);
        }
    }