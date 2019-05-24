<?php
/**
 * @Author: sunrise
 * @Date: 2019/5/23 下午3:32
 * @Last Modified by: sunrise
 * @Last Modified time: 2019/5/23 下午3:32
 * @Describe: MongoDB 连接
 */

namespace System\Databases;

class Mongo
{
    protected $mongo;

    public  function init ()
    {
        if (empty($this->mongo))
        {
            global $config;

            if (empty($config) || !isset($config['mongo']) || empty($config['mongo']))
            {
                header('HTTP/1.1 404 Service Unavailable.', TRUE, 404);
                echo 'mongo config not inter. Please open the following file and correct this: ' . pathinfo(__FILE__, PATHINFO_BASENAME);
                exit;
            }

            try {
                $conn = new \MongoDB\Driver\Manager("mongodb://{$config['mongo']['host']}:{$config['mongo']['port']}");
                if ($conn)
                {
                    $this->mongo = $conn;
                } else {
                    header('HTTP/1.1 500 Service Unavailable.', TRUE, 500);
                    echo 'redis conn exception ' . pathinfo(__FILE__, PATHINFO_BASENAME);
                    exit;
                }

            } catch (\Exception $e) {
                header('HTTP/1.1 500 Service Unavailable.', TRUE, 500);
                echo $e->getMessage();
                exit;
            }
        }

        return $this->mongo;
    }
}