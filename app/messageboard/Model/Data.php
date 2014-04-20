<?php

    class Model_Data
    {
        public function readMessages()
        {
            try
            {
                $dsn = 'mysql:dbname=messageboard;host=localhost';
                $db = new PDO($dsn, 'root', '123456');
                $sql = 'SELECT `nickname`, `message` FROM `messagelist`';
                $ret = $db->query($sql);

                if ($ret)
                {
                    return $ret->fetchAll();
                }

                return false;
            }
            catch (PDOException $e)
            {
                return false;
            }
        }

        public function addMessage($nickname, $message)
        {
            try
            {
                $dsn = 'mysql:dbname=messageboard;host=localhost';
                $db = new PDO($dsn, 'root', '123456');
                $sql = 'INSERT INTO `messagelist` (`nickname`, `message`) VALUES (?, ?)';
                $stmt = $db->prepare($sql);
                $data = array(
                    htmlspecialchars($nickname),
                    htmlspecialchars($message),
                );
                $ret = $stmt->execute($data);

                if ($ret)
                {
                    return true;
                }

                return false;
            }
            catch (PDOException $e)
            {
                return false;
            }
        }
    }