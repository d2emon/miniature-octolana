<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
	'urlManager' => [
	    'enablePrettyUrl' => true,
	    'showScriptName' => false,
	],
    ],
    'modules' => [
	'trcards' => [
	    'class' => 'common\modules\trcards\Module',
	],
    ],
];
