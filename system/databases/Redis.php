<?php
/**
 * @Author: sunrise
 * @Date: 2019/5/23 下午3:31
 * @Last Modified by: sunrise
 * @Last Modified time: 2019/5/23 下午3:31
 * @Describe: Redis 连接
 */
namespace System\Databases;

class Redis
{
    protected $redis;

    public  function init ()
    {
        if (empty($this->redis))
        {
            global $config;

            if (empty($config) || !isset($config['redis']) || empty($config['redis']))
            {
                header('HTTP/1.1 404 Service Unavailable.', TRUE, 404);
                echo 'redis config not inter. Please open the following file and correct this: ' . pathinfo(__FILE__, PATHINFO_BASENAME);
                exit;
            }

            try {
                $db = new \Redis();
                $conn = $db->connect($config['redis']['host'], $config['redis']['port']);
                if ($conn)
                {
                    $this->redis = $conn;
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

        return $this->redis;
    }

}