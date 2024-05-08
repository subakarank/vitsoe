<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        date_default_timezone_set('Europe/London'); 
         // Define product data
         $products = [
             ['name' => 'Product 1', 'code' => 'VTISOE01'],
             ['name' => 'Product 2', 'code' => 'VTISOE02'],
             ['name' => 'Product 3', 'code' => 'VTISOE03'],
             ['name' => 'Product 3', 'code' => 'VTISOE04'],
         ];
         // Iterate each product and insert into table with timezone
         foreach ($products as $product) {
             DB::table('products')->insert([
                 'name' => $product['name'],
                 'code' => $product['code'],
                 'created_at' => Carbon::now(),
                 'updated_at' => Carbon::now(),
             ]);
         }
    }
}
