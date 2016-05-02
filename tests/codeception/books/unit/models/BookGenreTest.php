<?php

namespace tests\codeception\books\unit\models;

use Yii;
use yii\codeception\TestCase;
use d2emon\books\models\BookGenre;
use tests\codeception\books\unit\fixtures\BookGenreFixture;
use Codeception\Specify;

class BookGenreTest extends TestCase
{
    use Specify;

    /**
     * @var \UnitTester
     */
    protected $tester;

    public function fixtures()
    {
	return [
            'book_genres' => BookGenreFixture::className(),
	];
    }

    public function testLabels()
    {
        $model = new BookGenre();

        $this->specify('animal should have right attribute labels', function () use ($model) {
            expect('animal_id is to be Animal ID',      $model->getAttributeLabel('animal_id'      ))->equals(Yii::t('app', 'Animal ID'));
            expect('animal_name is to be Animal',       $model->getAttributeLabel('animal_name'    ))->equals(Yii::t('app', 'Animal'   ));
            expect('animal_child is to be Children',    $model->getAttributeLabel('animal_child'   ))->equals(Yii::t('app', 'Children' ));
            expect('animal_keywords is to be Keywords', $model->getAttributeLabel('animal_keywords'))->equals(Yii::t('app', 'Keywords' ));
        });
    }

    public function testValidation()
    {
        $model = new BookGenre();

        $this->specify('animal should not allowed to be empty', function () use ($model) {
            expect('model should not validate',    $model->validate())->false();
            expect('error message is to be shown', $model->errors    )->hasKey('animal_name');
        });

        $model = new BookGenre();
	$model->load(["Animal" => [
	    'animal_name' => 'New Animal',
	]]);

        $this->specify('animal should be edited properly', function () use ($model) {
            expect('model should validate', $model->validate())->true();
        });
    }

    public function testPostCounter()
    {
        $model = $this->book_genres(1);

        $this->specify('animal should be edited properly', function () use ($model) {
            expect('model should validate', $model->posts_count)->equals(Post::find()->joinWith('breed', false)->where(['breeds.animal_id' => $model->animal_id])->count());
        });
    }
}
