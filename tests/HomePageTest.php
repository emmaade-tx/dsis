<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomePageTest extends TestCase
{
    /**
     * A test to ensure the homepage is visited.
     *
     * @return void
     */
    public function testHomePageIsvisited()
    {
        $this->visit('/')
             ->see('Welcome to Demo Supermarket Information System');
    }
}
