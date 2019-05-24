<?php
/**
 * @Author: sunrise
 * @Date: 2019/5/23 下午2:27
 * @Last Modified by: sunrise
 * @Last Modified time: 2019/5/23 下午2:27
 * @Describe: 入口文件
 */

/**
 * 日志文件的Redis 队列
 */
define('REDIS_KEYS', '');

/**
 * Root 目录
 */
define('ROOT_PATH', __DIR__);

/**
 * 系统根目录
 */
$system_path = 'system';

/**
 * 配置文件目录
 */
$config_path = 'config';

/**
 * config 配置文件
 */
$config_file = 'config.php';


/**
 * 应用目录
 */
$application_path = 'application';

if (! is_dir(ROOT_PATH . DIRECTORY_SEPARATOR . $system_path))
{
    header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
    echo 'Your system folder path does not appear to be set correctly. Please open the following file and correct this: ' . pathinfo(__FILE__, PATHINFO_BASENAME);
    exit;
}

/**
 * 系统根目录常量
 */
define('SYSTEM_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . $system_path);

if (! is_dir(ROOT_PATH . DIRECTORY_SEPARATOR . $config_path))
{
    header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
    echo 'Your config folder path does not appear to be set correctly. Please open the following file and correct this: ' . pathinfo(__FILE__, PATHINFO_BASENAME);
    exit;
}

/**
 * 配置根目录常量
 */
define('CONFIG_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . $config_path);

if (! is_dir(ROOT_PATH . DIRECTORY_SEPARATOR . $application_path))
{
    header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
    echo 'Your application folder path does not appear to be set correctly. Please open the following file and correct this: ' . pathinfo(__FILE__, PATHINFO_BASENAME);
    exit;
}

/**
 * 应用根目录常量
 */
define('APP_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . $application_path);

if (! file_exists(CONFIG_PATH . DIRECTORY_SEPARATOR . $config_file))
{
    header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
    echo 'Your config files path does not appear to be set correctly. Please open the following file and correct this: ' . pathinfo(__FILE__, PATHINFO_BASENAME);
    exit;
}

/**
 * config 文件
 */
define('CONFIG_FILE', CONFIG_PATH . DIRECTORY_SEPARATOR . $config_file);

require_once(SYSTEM_PATH . DIRECTORY_SEPARATOR . 'RedisMongoLog.php');