<?php 
use tests\codeception\books\AcceptanceTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that book author is accesible');
$I->amOnPage('/books');

$I->see('J. R. R. Tolkien');
$I->click('J. R. R. Tolkien');

$I->see('J. R. R. Tolkien');
$I->see('Silmarillion');
$I->click('Read');

$I->see('Feanor');
