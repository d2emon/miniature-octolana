<?php 
use tests\codeception\games\AcceptanceTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that game is in scroller');
$I->amOnPage('/game');

$I->see('Pacman', '.scroller');
$I->click('Pacman');

$I->see('Namco');
$I->see('Pacman');
$I->click('Read');

$I->see('CD-Man');
