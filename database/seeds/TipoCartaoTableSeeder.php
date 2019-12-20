<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoCartaoTableSeeder extends Seeder
{
    const TIPO_CARTAO = [
        'CREDITO',
        'DEBITO'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::TIPO_CARTAO as $item) {
            DB::table('tipo_cartao')->insert([
                'nm_tipo_cartao' => $item
            ]);
        }
    }
}
