<?php

namespace frontend\modules\games\controllers;

use yii\web\Controller;
use yii\data\ActiveDataProvider;
use frontend\modules\games\models\GameCompany;
use frontend\modules\games\models\BookAuthor;

class DefaultController extends Controller
{
    public function actionIndex()
    {
	return $this->render('index', [
	    'companies' => new ActiveDataProvider([
	        'query' => GameCompany::find(),
	    ]),
	    'authors' => new ActiveDataProvider([
	        'query' => BookAuthor::find(),
	    ]),
	]);
    }
}
