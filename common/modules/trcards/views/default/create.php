<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\trcards\models\Trcard */

$this->title = Yii::t('trcards', 'Create Trcard');
$this->params['breadcrumbs'][] = ['label' => Yii::t('trcards', 'Trcards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trcard-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
