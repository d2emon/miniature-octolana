<?php

namespace tests\codeception\books\unit\fixtures;

use Yii;
use yii\test\ActiveFixture;

class BookGenreFixture extends ActiveFixture
{
    public $dataFile   = '@tests/codeception/books/unit/fixtures/data/book_genre.php';
    public $modelClass = 'd2emon\books\models\BookGenre';

    /*
    public function init()
    {
	parent::init();
	$class = new \ReflectionClass($this);
        $this->dataFile = dirname($class->getFileName()) . '/fucking_data/' . $this->getTableSchema()->fullName . '.php';
    }
     */
}
