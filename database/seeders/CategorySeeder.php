<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category_name' =>'Fiction'
            ]);

        Category::create([
            'category_name' =>'Thriller'
            ]);

        Category::create([
            'category_name' =>'Biography'
            ]);
        
        Category::create([
            'category_name' =>'Science Fiction'
            ]);

        Category::create([
            'category_name' =>'Romance'
            ]);

        Category::create([
            'category_name' =>'Poetry'
            ]);

        Category::create([
            'category_name' =>'Children Literature'
            ]);

        Category::create([
            'category_name' =>' Horror'
            ]);

        Category::create([
            'category_name' =>' Cookbooks'
            ]);

        Category::create([
            'category_name' =>' Historical'
            ]);
    
    }
}
