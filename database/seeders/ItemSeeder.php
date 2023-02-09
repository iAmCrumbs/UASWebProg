<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'item_name' => 'Vegetable 1',
            'item_desc' => 'This is a vegetable',
            'price' => '1000',
            'image_url' => 'https://picsum.photos/50'
        ]);

        Item::create([
            'item_name' => 'Vegetable 2',
            'item_desc' => 'This is a vegetable',
            'price' => '2000',
            'image_url' => 'https://picsum.photos/50'
        ]);
        Item::create([
            'item_name' => 'Vegetable 3',
            'item_desc' => 'This is a vegetable',
            'price' => '3000',
            'image_url' => 'https://picsum.photos/50'
        ]);
        Item::create([
            'item_name' => 'Vegetable 4',
            'item_desc' => 'This is a vegetable',
            'price' => '4000',
            'image_url' => 'https://picsum.photos/50'
        ]);
        Item::create([
            'item_name' => 'Vegetable 5',
            'item_desc' => 'This is a vegetable',
            'price' => '5000',
            'image_url' => 'https://picsum.photos/50'
        ]);
        Item::create([
            'item_name' => 'Vegetable 6',
            'item_desc' => 'This is a vegetable',
            'price' => '6000',
            'image_url' => 'https://picsum.photos/50'
        ]);
        Item::create([
            'item_name' => 'Vegetable 7',
            'item_desc' => 'This is a vegetable',
            'price' => '7000',
            'image_url' => 'https://picsum.photos/50'
        ]);
        Item::create([
            'item_name' => 'Vegetable 8',
            'item_desc' => 'This is a vegetable',
            'price' => '8000',
            'image_url' => 'https://picsum.photos/50'
        ]);
        Item::create([
            'item_name' => 'Vegetable 9',
            'item_desc' => 'This is a vegetable',
            'price' => '9000',
            'image_url' => 'https://picsum.photos/50'
        ]);
        Item::create([
            'item_name' => 'Vegetable 10',
            'item_desc' => 'This is a vegetable',
            'price' => '10000',
            'image_url' => 'https://picsum.photos/50'
        ]);
        Item::create([
            'item_name' => 'Vegetable 11',
            'item_desc' => 'This is a vegetable',
            'price' => '11000',
            'image_url' => 'https://picsum.photos/50'
        ]);
    }
}
