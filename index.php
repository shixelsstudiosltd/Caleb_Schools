<?php
defined('DS') or define('DS',DIRECTORY_SEPARATOR);
// change the following paths if necessary
$yii=dirname(__FILE__).'/../../apps/yii/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';
$shortcuts=dirname(__FILE__).DS.'protected'.DS .'helpers'.DS .'shortcuts.php';
$utils=dirname(__FILE__).DS.'protected'.DS .'helpers'.DS .'utils.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require($shortcuts);
require($utils);
require_once($yii);
Yii::createWebApplication($config)->run();
