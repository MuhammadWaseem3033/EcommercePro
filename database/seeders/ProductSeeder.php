<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        (new Product()) -> create([
            'user_id'=> '1',
            'title' => 'tile',
            'category_id' => '1',
            'price'=>'100',
            'discount_price' =>'90',
            'quantity'=>'10',
            'image' => '1680203165.jpg',
            'description' =>'nfnogjwd;jewpj pf je jpefjpf',
        ]);
    }
}
