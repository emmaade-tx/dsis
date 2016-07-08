<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SearchTest extends TestCase
{
   use DatabaseTransactions;
    /**
     * This test user can test item.
     *
     * @return void
     */
    public function testUserCannotSearchItem()
    {
    	$item = factory('Dsis\Item')->create([
            'name'        => 'Infinix Zero',
            'price'     => 20000,
            'category' => 'laptop',
        ]);

        $this->visit('/')
        	->type('', 'search')
        	->press('Search')
        	->see('The search field is required.');
    }

    /**
     * This test user can test item.
     *
     * @return void
     */
    public function testUserCanSearchItemSuccessfully()
    {
    	$item = factory('Dsis\Item')->create([
            'name'        => 'Infinix Zero',
            'price'     => 20000,
            'category' => 'laptop',
        ]);

        $this->visit('/')
        	->type('Infinix Zero', 'search')
        	->press('Search')
        	->see('Results')
        	->seePageIs('/item/search');
    }
}
