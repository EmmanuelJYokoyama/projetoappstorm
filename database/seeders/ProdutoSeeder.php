<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('produtos')->insert([
        	'id' => 1,
        	'nome' => 'Xiaomi Mi 12',
            'valor' => '2300',
            'fornecedor_id' => '1',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('produtos')->insert([
        	'id' => 2,
        	'nome' => 'HUAWEI P30 Plus',
            'valor' => '7000',
            'fornecedor_id' => '2',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('produtos')->insert([
        	'id' => 3,
        	'nome' => 'Samsung Galaxy S23',
            'valor' => '11000',
            'fornecedor_id' => '3',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('produtos')->insert([
        	'id' => 4,
        	'nome' => 'Asus Zenfone 8',
            'valor' => '1000',
            'fornecedor_id' => '4',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
        \DB::table('produtos')->insert([
        	'id' => 5,
        	'nome' => 'Motorola Moto G20 Plus',
            'valor' => '1500',
            'fornecedor_id' => '5',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}
