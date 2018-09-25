<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'title' => 'iphone',
            'description' => 'iphone',
            'image' => 'iphone.png', // secret
            'thumbnail' => 'iphone-thumbnail.png',
            'price' => 200.18,
        ]);
    }
}
