<?php namespace App\Tests;
use App\Tests\AcceptanceTester;

class UserCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Test my page');
        $I->amOnPage('/toto');
        $I->see('Nathan RABADAN');
        $I->see('job title'); 
        
    }
}
