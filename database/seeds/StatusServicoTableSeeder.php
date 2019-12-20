<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusServicoTableSeeder extends Seeder
{
    const STATUS_SERVICO = [
        'TRIAGEM',
        'EXECUÇÃO',
        'AGUARDANDO PAGAMENTO',
        'CONCLUÍDO',
        'CANCELADO'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::STATUS_SERVICO as $item) {
            DB::table('status_servico')->insert([
                'nm_status_servico' => $item
            ]);
        }
        
    }
}
