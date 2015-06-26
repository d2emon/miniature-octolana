<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\trcards\models\Trcard */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Trcard',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Trcards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="trcard-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
