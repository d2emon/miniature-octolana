<div class="games-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
        <?php \yii2masonry\yii2masonry::begin([
	    'clientOptions' => [
	        'columnWidth'  => 2,
	        'itemSelector' => '.item'
	    ]
	]); ?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $companies,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => function ($model, $key, $index, $widget) {
                return "<div>\n".$model->name."</div>\n<div>\n".$model->description."</div>\n";
	    },
		// 'itemView' => '@app/views/arbeiten/iviews/_view',
	    'summary' => false,
            'layout' => '{items}'
	]); ?>
        <?php \yii2masonry\yii2masonry::end(); ?>
</div>
