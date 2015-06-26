<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\trcards\models\Trcard */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('trcards', 'Trcards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trcard-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('trcards', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('trcards', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('trcards', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'url:url',
            'title',
            'image',
            'description:ntext',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
