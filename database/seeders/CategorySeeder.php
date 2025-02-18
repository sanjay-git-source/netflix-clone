<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=['Scifi','Horror','Entertainment'];

        foreach ($categories as $categoryName) {
            # code...

            Category::create([
                'name'=>$categoryName
            ]);

        } 
    }
}
