<?php 
use tests\codeception\games\AcceptanceTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that game author is accesible');
$I->amOnPage('/games');

$I->see('Namco');
$I->click('Namco');

$I->see('Namco');
$I->see('Pacman');
$I->click('Read');

$I->see('CD-Man');
