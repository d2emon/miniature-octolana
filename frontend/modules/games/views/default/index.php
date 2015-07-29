<div class="games-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
        <?php \yii2masonry\yii2masonry::begin([
	    'clientOptions' => [
	        'columnWidth'  => 256,
	        'itemSelector' => '.item'
	    ]
	]); ?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $companies,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => '_company',
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $authors,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => '_author',
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $companies,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => '_company',
	    'itemView' => '_author',
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $authors,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => '_author',
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $companies,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => '_company',
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $authors,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => '_author',
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $companies,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => '_company',
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $authors,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => '_author',
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $companies,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => '_company',
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $authors,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => '_author',
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $companies,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => '_company',
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $authors,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => '_author',
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $companies,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => '_company',
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $authors,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => '_author',
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
        <?php \yii2masonry\yii2masonry::end(); ?>
</div>
