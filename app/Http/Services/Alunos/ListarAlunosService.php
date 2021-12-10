<?php

namespace App\Http\Services\Alunos;

use App\Http\Controllers\Controller;
use App\Models\Aluno;

class ListarAlunosService extends Controller
{
    public function executar()
    {
        return Aluno::all();
    }
}
