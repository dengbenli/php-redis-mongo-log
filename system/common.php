<?php
/**
 * @Author: sunrise
 * @Date: 2019/5/23 下午3:09
 * @Last Modified by: sunrise
 * @Last Modified time: 2019/5/23 下午3:09
 * @Describe: 公共函数库
 */

if (! function_exists('get_config'))
{
    /**
     * 加载所有配置
     */
    function &get_config ()
    {
        static $conf;
        if (empty($conf))
        {
            global $config;

            return $conf = $config;
        }

        return $conf;
    }
}

if (! function_exists('get_config_keys'))
{
    /**
     * 加载指定配置
     *
     * @param $keys string
     */
    function get_config_keys ($keys)
    {

    }
}