<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    CONST TIPO_ITEM = [
        'PEÇAS',
        'SERVIÇOS'
    ];
    
    public function run()
    {
        foreach(self::TIPO_ITEM as $item) {
            DB::table('tipo_item')->insert([
                'nm_tipo_item' => $item
            ]);
        }
        
    }
}
