<?php
/**
 * @Author: sunrise
 * @Date: 2019/5/23 下午2:40
 * @Last Modified by: sunrise
 * @Last Modified time: 2019/5/23 下午2:40
 * @Describe: 核心文件
 */

/**
 * 加载配置文件
 */
require_once(CONFIG_FILE . '');

/**
 * 加载函数库文件
 */
require_once(SYSTEM_PATH . DIRECTORY_SEPARATOR . 'common.php');

/**
 * 加载 DB
 */
require_once(SYSTEM_PATH . DIRECTORY_SEPARATOR . 'databases' . DIRECTORY_SEPARATOR . 'DB.php');

/**
 * 加载 Redis
 */
require_once(SYSTEM_PATH . DIRECTORY_SEPARATOR . 'databases' . DIRECTORY_SEPARATOR . 'Redis.php');

/**
 * 加载 Mongo
 */
require_once(SYSTEM_PATH . DIRECTORY_SEPARATOR . 'databases' . DIRECTORY_SEPARATOR . 'Mongo.php');

/**
 * 加载应用程序文件
 */
require_once(APP_PATH . DIRECTORY_SEPARATOR . 'app.php');

while (true)
{
    \Application\App::init()->write();
}
