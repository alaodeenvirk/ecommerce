<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            
            [

                'name' =>'laptop',
            'category' =>'laptop device electro',
            'price' =>'40k',
            'descryption' =>'12 gb ram 128 rom vivo made in china',
            'gallery'=>'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YXBwbGUlMjBsYXB0b3B8ZW58MHx8MHx8&w=1000&q=80'
            
            ],
            [

                'name' =>'dell laptop',
            'category' =>'mobile device electro',
            'price' =>'40k',
            'descryption' =>'12 gb ram 1tb rom vivo made in china',
            'gallery'=>'https://cdn.mos.cms.futurecdn.net/6t8Zh249QiFmVnkQdCCtHK.jpg'
            
            ],
            [

                'name' =>'lcd',
            'category' =>'mobile device electro',
            'price' =>'40k',
            'descryption' =>'5year warranty  vivo made in china',
            'gallery'=>'https://www.savers.pk/images/thumbnails/1600/1400/detailed/78/DT-UN32N5300AFXZA-heroimage-050118.jpg'
            ],
            [

                'name' =>'fridge',
            'category' =>'mobile device electro',
            'price' =>'40k',
            'descryption' =>'haier company made in china',
            'gallery'=>'https://www.ikea.com/gb/en/images/products/uppkalla-fridge-freezer-ikea-300-freestanding-stainless-steel-colour__0957641_pe805094_s5.jpg?f=s'

            ]
        ]);
    }
}
