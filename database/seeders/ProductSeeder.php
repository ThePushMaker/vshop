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
        Product::create([
           'title' => 'mollit aute cupidatat',
           'price' => 19.99,
           'quantity' => 3,
           'category_id'=> 1,
           'brand_id' => 1,
           'description' => 'deserunt et culpa ex culpa aute aliquip Duis eu fugiat sed elit consequat deserunt reprehenderit velit pariatur. qui veniam Duis in nostrud fugiat sed minim labore aute consectetur non aliqua exercitation aliquip exercitation laborum ut. culpa lorem id aliquip nostrud qui anim ad et labore sunt magna deserunt sint occaecat adipiscing. ipsum reprehenderit sint commodo commodo voluptate id eiusmod amet amet sunt laborum laboris tempor exercitation sint incididunt cupidatat ipsum. tempor nulla enim tempor sed ullamco ipsum sed laborum id Duis minim incididunt culpa ea nulla sunt labore quis. tempor velit veniam irure ut enim in in culpa commodo incididunt aliqua quis lorem deserunt irure.'
        ]);
    }
}
