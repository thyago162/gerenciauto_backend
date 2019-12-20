<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'nm_email' => 'admin@gerenciauto.com.br',
            'nm_senha' => Hash::make(env('ADMIN_PASSWORD')),
            'co_qualificacao_pessoa' => 1,
            'dt_criacao' => date('Y/m/d')
        ]);
    }
}
