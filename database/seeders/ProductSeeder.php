<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'productCode'   => 'WhiteSugar',
                'productName'   => 'WHITE SUGAR',
                'displayName'   => 'White Sugar - 1 Kg',
                'unitPrice'     => 40.00,
                'description'   => '1 Kg of White Sugar',
                'status'        => '1',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'productCode'   => 'BrownSugar',
                'productName'   => 'BROWN SUGAR',
                'displayName'   => 'Brown Sugar - 1 Kg',
                'unitPrice'     => 80.00,
                'description'   => '1 Kg of Brown Sugar',
                'status'        => '1',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'productCode'   => 'WheatFlour',
                'productName'   => 'WHEAT FLOUR',
                'displayName'   => 'Wheat Flour - 1 Kg',
                'unitPrice'     => 40.00,
                'description'   => '1 Kg of Wheat Flour',
                'status'        => '1',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'productCode'   => 'MaidaFlour',
                'productName'   => 'MAIDA FLOUR',
                'displayName'   => 'Maida Flour - 1 Kg',
                'unitPrice'     => 40.00,
                'description'   => '1 Kg of Maida Flour',
                'status'        => '1',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'productCode'   => 'PonniRice',
                'productName'   => 'PONNI RICE',
                'displayName'   => 'Karnataka Ponni Rice - 1 Kg',
                'unitPrice'     => 60.00,
                'description'   => '1 Kg of Karnataka Ponni Rice',
                'status'        => '1',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'productCode'   => 'BasmatiRice',
                'productName'   => 'BASMATI RICE',
                'displayName'   => 'India Gate Basmati Rice - 1 Kg',
                'unitPrice'     => 120.00,
                'description'   => '1 Kg of India Gate Basmati Rice',
                'status'        => '1',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ]   
        ];

        foreach($products as $product)
        {
            $result = DB::table('products')->insert([$product]);
        }
    }
}
