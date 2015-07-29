<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
use yii\widgets\ListView;
use frontend\modules\games\models\Genre;
use yii\grid\GridView;
use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\modules\games\models\Genre */

$path = [];
foreach($model->supGenres as $supgenre) {
    $path[] = [
        'label' => $supgenre->name,
	'url'   => ['/games/genre/view', 'id' => $supgenre->id],
    ];
}
$path[] = $model->name;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('games', 'Genres'), 'url' => ['index']];
$this->params['breadcrumbs'] = array_merge($this->params['breadcrumbs'], $path);
?>
<div class="genre-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('games', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('games', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('games', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
	    [
		'label' => Yii::t('games', 'Path'),
		'value' => Breadcrumbs::widget([
		    'homeLink' => false,
		    'links'    => $path,
		]),
		'format' => 'raw',
	    ],
	    [
		'label' => Yii::t('games', 'Same level'),
		'value'  => ListView::widget([
		    'dataProvider' => new ArrayDataProvider([
			'allModels' => $model->sibGenre,
		    ]),
		    'itemView' => function ($model, $key, $index, $widget){
		        return "<li>".Html::a($model->name, ["/games/genre/view", "id" => $model->id])."</li>";
		    },
		    'layout' => "<ul>\n{items}\n</ul>\n",
		    'emptyText' => '',
		]),
		'format' => 'raw',
	    ],
	    [
		'label' => Yii::t('games', 'Bottom level'),
		'value'  => ListView::widget([
		    'dataProvider' => new ArrayDataProvider([
			'allModels' => $model->subGenre,
		    ]),
		    'itemView' => function ($model, $key, $index, $widget){
		        return "<li>".Html::a($model->name, ["/games/genre/view", "id" => $model->id])."</li>";
		    },
		    'layout' => "<ul>\n{items}\n</ul>\n",
		    'emptyText' => '',
		]),
		'format' => 'raw',
	    ],
            'description:ntext',
        ],
    ]) ?>

</div>
