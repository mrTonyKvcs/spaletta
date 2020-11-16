<?php

use App\CategoryTypes;
use Illuminate\Database\Seeder;

class CategoryTypesTableSeeder extends Seeder
{
    protected $types = [
        [
            'name' => 'Étel'
        ],
        [
            'name' => 'Ital'
        ],
        [
            'name' => 'Rendezvények'
        ],
        [
            'name' => 'Kiszállításos Étlap'
        ],
        [
            'name' => 'Kiszállításos Itallap'
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->types as $type) {
            $type['slug'] = Str::slug($type['name']);
            CategoryTypes::updateOrCreate($type);
        }
    }
}
