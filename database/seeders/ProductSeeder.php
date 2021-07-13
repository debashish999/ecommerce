<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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

           [
            'name' => 'evill',
            'price' => '399',
            'description' => '10 capsule in pack',
            'category' => 'body care',
            'gallery' => 'meds.jpg'
           ],
           [
            'name' => 'chmanprash',
            'price' => '799',
            'description' => '1 bottle',
            'category' => 'body care',
            'gallery' => 'meds.jpg'
           ],
           [
            'name' => 'indulekha',
            'price' => '199',
            'description' => 'oil',
            'category' => 'hair care',
            'gallery' => 'meds.jpg'
           ]
        ]);
    }
}
