<?php 
use tests\codeception\books\FunctionalTester;
$I = new FunctionalTester($scenario);
$I->wantTo('find book by title');
$I->amOnPage('/books');
$I->fillField('Search', 'of the Rings');
$I->click('Search');

$I->see('J. R. R. Tolkien');
$I->see('Lord of the Rings');
$I->click('Lord of the Rings');

$I->see('J. R. R. Tolkien');
$I->see('Lord of the Rings');
$I->click('Read');

$I->see('Hobbit');
