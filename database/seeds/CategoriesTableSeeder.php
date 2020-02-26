<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = config()->get('spaletta.categories');

        foreach($categories as $category) {
            $category['slug'] = Str::slug($category['name']);

            Category::updateOrCreate($category);
        }
    }
}
