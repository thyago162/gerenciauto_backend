<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrioridadeTableSeeder extends Seeder
{
    const PRIORIDADE = [
        'BAIXA',
        'MEDIA',
        'ALTA'
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::PRIORIDADE as $item) {
            DB::table('prioridade')->insert([
                'nm_prioridade' => $item
            ]);
        }
    }
}
