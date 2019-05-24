<?php
/**
 * @Author: sunrise
 * @Date: 2019/5/24 下午5:09
 * @Email: <dengbenli@myzaker.com>
 * @Last Modified by: sunrise
 * @Last Modified time: 2019/5/24 下午5:09
 * @Describe: DB 类
 */
namespace System\Databases;

class DB
{
    protected $conn;

    public function __construct ()
    {

    }

    public function conn ($object)
    {
        return $object->init();
    }
}