<?php
namespace frontend\modules\site\controllers;

use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class ErrorController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'index' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
}
