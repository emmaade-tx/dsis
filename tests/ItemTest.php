<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ItemTest extends TestCase
{
	use DatabaseTransactions;
    /**
     * This test for empty fields.
     *
     * @return void
     */
    public function testAllFieldAreMissing()
    {
    	$item = factory('Dsis\Item')->create([
            'name'        => 'Infinix Zero',
            'price'     => 20000,
            'category' => 'laptop',
        ]);

        $this->visit('/item/create')
        	->type('', 'name')
        	->type('', 'category')
        	->type('', 'price')
            ->press('Add')
            ->see('The name field is required.')
            ->see('The category field is required.')
            ->see('The price field is required.');
    }

    /**
     * This test for empty fields except name.
     *
     * @return void
     */
    public function testAllFieldAreMissingExceptName()
    {
    	$item = factory('Dsis\Item')->create([
            'name'        => 'Infinix Zero',
            'price'     => 20000,
            'category' => 'laptop',
        ]);

        $this->visit('/item/create')
        	->type('Infinix hot', 'name')
        	->type('', 'category')
        	->type('', 'price')
            ->press('Add')
            ->see('The category field is required.')
            ->see('The price field is required.');
    }

    /**
     * This test for empty fields except category.
     *
     * @return void
     */
    public function testAllFieldAreMissingExceptCategory()
    {
    	$item = factory('Dsis\Item')->create([
            'name'        => 'Infinix Zero',
            'price'     => 20000,
            'category' => 'laptop',
        ]);

        $this->visit('/item/create')
        	->type('', 'name')
        	->type('laptop', 'category')
        	->type('', 'price')
            ->press('Add')
            ->see('The name field is required.')
            ->see('The price field is required.');
    }

    /**
     * This test for empty fields except price.
     *
     * @return void
     */
    public function testAllFieldAreMissingExceptPrice()
    {
    	$item = factory('Dsis\Item')->create([
            'name'        => 'Infinix Zero',
            'price'     => 20000,
            'category' => 'laptop',
        ]);

        $this->visit('/item/create')
        	->type('', 'name')
        	->type('', 'category')
        	->type(2000, 'price')
            ->press('Add')
            ->see('The name field is required.')
            ->see('The category field is required.');
    }

    /**
     * Test that Item was succesfully added to the database.
     *
     * @return void
     */
    public function testItemWasSuccessfullyUploaded()
    {
    	$item = factory('Dsis\Item')->create([
            'name'        => 'Infinix Zero',
            'price'     => 20000,
            'category' => 'laptop',
        ]);

        $this->visit('/item/create')
        	->type('Infinix hot', 'name')
        	->type('laptop', 'category')
        	->type(2000, 'price')
            ->press('Add')
            ->seePageIs('/')
            ->see('Item succesfully added');
    }
}
