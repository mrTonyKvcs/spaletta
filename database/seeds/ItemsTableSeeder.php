<?php

use App\Item;
use Illuminate\Support\Str;
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
        $foods = config()->get('spaletta.delivery-drinks');
        //$foods = config()->get('spaletta.summer-foods');

        foreach($foods as $item) {

            if (!isset($item['less_price'])) {
                $item['less_price'] = null;
            }

            if (isset($item['name']['hu'])) {
                $item['slug'] = Str::slug($item['name']['hu']);
                $item['name'] = $item['name']['hu'];
            } else {
                $item['slug'] = Str::slug($item['name']);
            }

            Item::updateOrCreate($item);
        }
    }
}
