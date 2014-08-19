<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Caleb Portal',

	// preloading 'log' component
	'preload'=>array(
            'log',
             'input',
            ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.modules.user.models.*',
                'application.modules.user.components.*',
                'application.modules.rights.*',
                'application.modules.rights.components.*',
                'application.extensions.bootstrap.components.*',
                'bootstrap.helpers.TbHtml',
                'bootstrap.helpers.TbArray',
                'bootstrap.widgets.TbDataColumn',
                 'bootstrap.behaviors.TbWidget',
	),
        
        'aliases' => array(
        //yiistrap
         'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'),
        // yiiwheels configuration
        'yiiwheels' => 'webroot.protected.extensions.yiiwheels'
        ),

	'modules'=>array(
            // uncomment the following to enable the Gii tool
            'gii'=>array(
                    'class'=>'system.gii.GiiModule',
                    'password'=>'centangle',
                     'generatorPaths' => array(
                      'bootstrap.gii'
                    ),
                    // If removed, Gii defaults to localhost only. Edit carefully to taste.
                    'ipFilters'=>array('127.0.0.1','::1'),
            ),
            
            'message' => array(
            'userModel' => 'User',
            'getNameMethod' => 'getFullName',
            'getSuggestMethod' => 'getSuggest',
             'viewPath' => '//messagesModuleCustom',
            ),
            
             'rights'=>array(
             'install'=>false,
             ),
            
            'forum'=>array(
            'class'=>'application.modules.bbii.BbiiModule',
            'adminId'=>1,
            'userClass'=>'User',
            'userIdColumn'=>'id',
            'userNameColumn'=>'username',
            ),
            
           'user'=>array(
                'tableUsers' => 'user',
                'tableProfiles' => 'profiles',
                'tableProfileFields' => 'profiles_fields',
            ),
	),

	// application components
	'components'=>array(
            'user' => array(  
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'class'=>'RWebUser',
            'loginUrl'=>array('/user/login'),
            ),
            
            'authManager'=>array(
            'class'=>'RDbAuthManager',
            'connectionID'=>'db',
               
            ),
            
            'mailer' => array(
            'class' => 'application.extensions.mailer.EMailer',
            ),
            
            'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',
            ),
            
            'yiiwheels' => array(
            'class' => 'yiiwheels.YiiWheels',
            ),
            
            'input' => array(
            'class' => 'CmsInput',
            'cleanPost' => true,
            'cleanGet' => true,
            'cleanMethod' => 'stripClean'
            ),
            
            'clientScript' => array(
            'class' => 'CClientScript',
            'scriptMap' => array(
                //don't allow the framework to load jQuery,we load it manually,(see components/Controller.php).
                //'jquery.js' => false,
                'jquery.min.js' => false
                ),
            ),	
                
            // uncomment the following to enable URLs in path-format	
            'urlManager'=>array(
                    'urlFormat'=>'path',
                    // 'showScriptName' => false,
                    'rules'=>array(
                            // 'site/page/<view:\w+>' => 'site/page/',
                            '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                            '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                            '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                    ),
            ),
            
            /*
            'db'=>array(
                    'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
            ),
             * */
                 
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=school',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
                        'tablePrefix' => '',
                         'emulatePrepare' => true,
                         'enableParamLogging'=>true,
                         'enableProfiling' => true,
                         'schemaCacheID' => 'cache',
                         'schemaCachingDuration' => 3600
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				/*array(
					 'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
				),*/
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);