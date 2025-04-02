<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Visit;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $Client = new Product();
        $product->name = 'Laptop';
        $product->price = 1200;
        $product->category_id = 2;
        $product->save();
       
    }
}
