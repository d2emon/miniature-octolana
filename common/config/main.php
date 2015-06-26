<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'en',
    'sourceLanguage' => 'en',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
	'urlManager' => [
	    'enablePrettyUrl' => true,
	    'showScriptName' => false,
	],
	'i8n' => [
            'class' => 'yii\i18n\PhpMessageSource',
	    'translations' => [
		'trcards.*' => [
		    'class' => 'yii\i18n\PhpMessageSource',
		    'basePath' => '@common/messages',
		    'sourceLanguage' => 'en',
		],
	    ],
	],
    ],
    'modules' => [
	'trcards' => [
	    'class' => 'common\modules\trcards\Module',
	],
    ],
];
