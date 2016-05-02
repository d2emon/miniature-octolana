<?php
use tests\codeception\books\FunctionalTester;
$I = new FunctionalTester($scenario);
$I->wantTo('ensure that book is in scroller');
$I->amOnPage('/books');

$I->see('Lord of the Rings', '.scroller');
$I->click('Lord of the Rings');

$I->see('J. R. R. Tolkien');
$I->see('Lord of the Rings');
$I->click('Read');

$I->see('Hobbit');
