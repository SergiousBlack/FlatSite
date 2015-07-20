<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
         'urlManager' =>[
            'enablePrettyUrl' => true,
            'showScriptName' => FALSE,
        ],
       'Images' =>[
            'class' => 'yii\web\urlManager',
            'baseUrl' => '//img.shte.esy.es/',
            'enablePrettyUrl' => true,
            'showScriptName' => FALSE,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
			
    ],
    'params' => $params,

];
