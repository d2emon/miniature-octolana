<div class="games-default-index">
    <h1><?= yii::t('games', 'Games') ?></h1>
    <?php \yii2masonry\yii2masonry::begin([
        'clientOptions' => [
	    'columnWidth'  => 256,
	    'itemSelector' => '.item'
	]
    ]); ?>
        <?php 
        $maxI = rand(2, 10);
        for($i=0; $i<$maxI; $i++):
	?>
        <?php 
        $maxJ = rand(0, 5);
        for($j=0; $j<$maxJ; $j++):
	?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $companies,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => '_company',
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
        <?php 
        endfor;
        $maxJ = rand(0, 5);
        for($j=0; $j<$maxJ; $j++):
	?>
        <?= \yii\widgets\ListView::widget([
	    'dataProvider' => $authors,
	    'itemOptions' => ['class' => 'item'],
	    'itemView' => '_author',
	    'summary'  => false,
            'layout'   => '{items}'
	]); ?>
	<?php 
        endfor; 
        endfor;
        ?>
    <?php \yii2masonry\yii2masonry::end(); ?>
</div>
