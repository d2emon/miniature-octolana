<?php

namespace common\modules\trcards\models;

use Yii;

/**
 * This is the model class for table "trcard".
 *
 * @property integer $id
 * @property string $url
 * @property string $title
 * @property string $image
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 */
class Trcard extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trcard';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url'], 'required'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['url', 'title', 'image'], 'string', 'max' => 255],
            [['url'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('trcards', 'ID'),
            'url' => Yii::t('trcards', 'Url'),
            'title' => Yii::t('trcards', 'Title'),
            'image' => Yii::t('trcards', 'Image'),
            'description' => Yii::t('trcards', 'Description'),
            'created_at' => Yii::t('trcards', 'Created At'),
            'updated_at' => Yii::t('trcads', 'Updated At'),
        ];
    }
}
