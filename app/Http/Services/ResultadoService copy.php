<?php

namespace App\Http\Services;
use Illuminate\Support\Facades\DB;

class DecibelimentosService
{
    public function index(){
        $decibelimentros = DB::table('decibelimetros')
        ->join('status_decibelimetro','decibelimetros.status_id','status_decibelimetro.id')
        ->join('lotacoes','decibelimetros.lotacao_id','lotacoes.id')
        ->get();
        ;

    }
}