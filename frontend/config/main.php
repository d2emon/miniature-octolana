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
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
	'yii2masonry' => [
	    'class' => 'philippfrenzel\yii2masonry\yii2masonry',
	],
    ],
    'modules' => [
	'site' => [
	    'class' => 'frontend\modules\site\Module',
	],
	'item' => [
	    'class' => 'frontend\modules\item\Module',
	],
	'trcards' => [
	    'class' => 'd2emon\trcards\Module',
	],
	'games' => [
	    'class' => 'd2emon\games\Module',
	],
    ],
    'params' => $params,
];
