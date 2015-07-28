<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii2masonry\yii2masonry;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\trcards\models\TrcardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Trcards');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trcard-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php \yii2masonry\yii2masonry::begin([
   	'clientOptions' => [
	    'columnWidth' => 25,
	    'itemSelector' => '.item'
	]
    ]); ?>
        <?php foreach($dataProvider->models as $model) : ?>
	<div class="item">
	    <h3><?= Html::a(Html::encode($model->title), ['/item/default/view', 'url' => $model->url]) ?><h3>
	    <div><?= $model->image ?></div>
	    <div><?= $model->description ?></div>
        </div>
        <?php endforeach; ?>
    <?php \yii2masonry\yii2masonry::end(); ?>

</div>
