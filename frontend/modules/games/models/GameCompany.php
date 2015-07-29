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
 * @property BookAuthor $bookAuthor
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
    public function getBookAuthor()
    {
	return $this->hasOne(BookAuthor::className(), ['game_company_id' => 'id']);
    }

    public function getAuthor()
    {
	$author = $this->bookAuthor;
	yii::trace(\yii\helpers\Json::encode(['author' => $author]));
	if(!$author){
	    $author = new BookAuthor;
	}
	yii::trace(\yii\helpers\Json::encode(['author' => $author]));
        return $author ? $author : new BookAuthor;
    }
	
}
