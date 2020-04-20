<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foods = config()->get('spaletta.foods');
        //$foods = config()->get('spaletta.drinks');

        foreach($foods as $item) {
            
            $item['slug'] = Str::slug($item['name']);

            if (!isset($item['less_price'])) {
                $item['less_price'] = null;
            }

            Item::updateOrCreate($item);
        }
    }
}
