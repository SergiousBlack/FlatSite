<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
       'admin' => [
            'class' => 'mdm\admin\Module',
            'layout' =>  null,
        ]
    ], 
    'timeZone' => 'Europe/Kiev',
    'name' => 'Sutki House',
    'language'=>'ru-RU',
    'components' => [
         'formatter' => [
            'timeZone' => 'UTC',
            'dateFormat' => 'd-m-Y',
            'timeFormat' =>  'php: H:i:s',
            'datetimeFormat' => 'd.MM.Y H:mm',
        ],
        
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        
        'authManager' => [
            'class' => 'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'
        ],
        
        'view' => [
            'theme' => [
                'pathMap' => [
                   '@app/views' => '@app/views/adminlte/example-views/yiisoft/yii2-app'
                ],
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
         
        
        'urlManager' =>[
            'enablePrettyUrl' => true,
            'showScriptName' => FALSE,
        ]
		
    ],
    
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
           'site/login',
            'site/error',
           'debug/*',
            'site/logout'
        ],
    ],
    
    'params' => $params,
	   
];
