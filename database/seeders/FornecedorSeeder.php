<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('fornecedors')->insert([
        	'id' => 1,
        	'nome' => 'Xiaomi',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('fornecedors')->insert([
        	'id' => 2,
        	'nome' => 'HUAWEI',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('fornecedors')->insert([
        	'id' => 3,
        	'nome' => 'Samsung',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('fornecedors')->insert([
        	'id' => 4,
        	'nome' => 'Asus',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
        \DB::table('fornecedors')->insert([
        	'id' => 5,
        	'nome' => 'Motorola',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}
