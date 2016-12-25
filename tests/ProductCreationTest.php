<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductCreationTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function productCreation()
    {

        $product = factory(App\Product::class)->create();
    }
}
