<?php

use App\CategoryTypes;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CategoryTypesTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(ItemsTableSeeder::class);
    }
}
