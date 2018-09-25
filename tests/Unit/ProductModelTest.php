<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Product;

class ProductModelTest extends TestCase
{
    //use RefreshDatabase;

    public function testProduct()
    {
        // Make call to application...
        //$product = factory(Product::class)->make();

        $this->assertDatabaseHas('products', [
            'title' => 'iphone'
        ]);

        $this->assertDatabaseMissing('products', [
            'title' => 'bush'
        ]);
    }
}
