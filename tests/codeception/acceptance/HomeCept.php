<?php

use tests\codeception\_pages\HomePage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that home page works');
HomePage::openBy($I);
$I->see('OPENi API Builder');
$I->seeLink('About');
$I->click('About');
$I->see('Browse APIs, Objects and their Properties');
