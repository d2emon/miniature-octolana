<?php
namespace frontend\modules\site\helpers;

use frontend\modules\site\models\Unitag;

class UnitagPath 
{
    public static function forModel($model)
    {
	$path = [];
	foreach($model->supTags as $suptag) {
	    $path[] = [
	        'label' => $suptag->name,
		'url'   => ['/site/unitag/view', 'id' => $suptag->id],
	    ];
	}
	$path[] = $model->name;

	return $path;        
    }	

    public static function forId($id)
    {
	return self::forModel(Unitag::findOne($id));
    }
}
