<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('vendas')->insert([
        	'id' => 1,
        	'created_at' => NOW(),
        	'updated_at' => NOW(),
            'cep' => '12236100',
            'uf'=> 'RJ',
            'cidade' => 'Petrópolis',
            'bairro' => 'Jd. Azaleias'
        	
        ]);
    	\DB::table('vendas')->insert([
        	'id' => 2,
            'created_at' => NOW(),
        	'updated_at' => NOW(),
            'cep' => '12236090',
            'uf'=> 'SP',
            'cidade' => 'São José Dos Campos',
            'bairro' => 'Pq. Industrial'
        	
        ]);
    	\DB::table('vendas')->insert([
        	'id' => 3,
        	'created_at' => NOW(),
        	'updated_at' => NOW(),
            'cep' => '12236080',
            'uf'=> 'SC',
            'cidade' => 'Taubate',
            'bairro' => 'Cpo. dos Alemaes'
        	
        ]);
    	
    }
}
