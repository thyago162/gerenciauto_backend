<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QualificacaoPessoaTableSeeder extends Seeder
{
    const QUALIFICACAO_PESSOA = [
        'ADMINISTRADOR',
        'EMPRESÁRIO',
        'FUNCIONÁRIO',
        'CLIENTE'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::QUALIFICACAO_PESSOA as $item) {
            DB::table('qualificacao_pessoa')->insert([
                'nm_qualificacao_pessoa' => $item
            ]);
        }
    }
}
