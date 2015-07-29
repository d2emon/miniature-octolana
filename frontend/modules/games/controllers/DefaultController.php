<?php

namespace frontend\modules\games\controllers;

use yii\web\Controller;
use yii\data\ActiveDataProvider;
use frontend\modules\games\models\GameCompany;
use frontend\modules\games\models\BookAuthor;
use frontend\modules\games\models\Genre;
use frontend\modules\games\models\Tag;

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
	    'genres' => new ActiveDataProvider([
	        'query' => Genre::find(),
	    ]),
	    'tags' => new ActiveDataProvider([
	        'query' => Tag::find(),
	    ]),
	]);
    }
}
