<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    // 'language' => 'en',
    // 'sourceLanguage' => 'en',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
	'urlManager' => [
	    'enablePrettyUrl' => true,
	    'showScriptName' => false,
	],
	'i18n' => [
	    'translations' => [
		'*' => [
		    'class' => 'yii\i18n\PhpMessageSource',
		    'basePath' => '@app/messages',
		],
		'trcards.*' => [
		    'class' => 'yii\i18n\PhpMessageSource',
		    'basePath' => '@common/messages',
		    'sourceLanguage' => 'en',
		],
		'games' => [
		    'class' => 'yii\i18n\PhpMessageSource',
		    'basePath' => '@app/messages',
		],
	    ],
	],
    ],
    'modules' => [
	'error' => [
	    'class' => 'common\modules\error\Module',
	],
	'trcards' => [
	    'class' => 'common\modules\trcards\Module',
	],
	'books' => [
	    'class' => 'd2emon\books\Module',
	],
    ],
];
