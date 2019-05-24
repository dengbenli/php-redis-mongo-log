<?php
/**
 * @Author: sunrise
 * @Date: 2019/5/23 下午2:37
 * @Last Modified by: sunrise
 * @Last Modified time: 2019/5/23 下午2:37
 * @Describe: 启动文件
 */
namespace Application;

class App
{
    private static $_init;

    private function __construct ()
    {

    }

    private function __clone ()
    {

    }

    public static function init ()
    {
        if (empty(self::$_init))
        {
            self::$_init = new self();
        }

        return self::$_init;
    }

    public function write ()
    {

    }
}