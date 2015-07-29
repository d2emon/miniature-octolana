<?php

namespace frontend\modules\games\models;

use Yii;

/**
 * This is the model class for table "game_company".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 *
 * @property BookAuthor[] $bookAuthors
 */
class GameCompany extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'game_company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('games', 'ID'),
            'name' => Yii::t('games', 'Name'),
            'description' => Yii::t('games', 'Description'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookAuthors()
    {
        return $this->hasMany(BookAuthor::className(), ['game_company_id' => 'id']);
    }
}
