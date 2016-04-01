<?php 
use tests\codeception\games\AcceptanceTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('find game by title');
$I->amOnPage('/games');
$I->fillField('Search', 'Pac');
$I->click('Search');

$I->see('Namco');
$I->see('Pacman');
$I->click('Pacman');

$I->see('Namco');
$I->see('Pacman');
$I->click('Read');

$I->see('CD-Man');
