<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Todos extends Controller
{
    public function criar()
    {
        // logger()->channel('currentDate')->debug('Chegou uma requisição para criar um todo', ['dados' => request()->all()]);
        $dadosDaRequisicao = request()->all();
        // dd($dadosDaRequisicao);
        $id =  DB::table('todos')->insertGetId([
            'title' => $dadosDaRequisicao['titulo'],
            'description' => $dadosDaRequisicao['conteudo'],
            'completed' => $dadosDaRequisicao['concluida'],
            'created_at' => now(),
        ]);
        if (!$id) {
            return response()->json(['message' => 'Erro ao criar'], 500);
        }
        return response()->json(['id'=> $id], 201);
    }
}
