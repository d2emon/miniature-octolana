<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\trcards\models\Trcard */

$this->title = Yii::t('trcards', 'Update {modelClass}: ', [
    'modelClass' => 'Trcard',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('trcards', 'Trcards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('trcards', 'Update');
?>
<div class="trcard-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
