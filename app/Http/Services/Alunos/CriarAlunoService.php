<?php

namespace App\Http\Services\Alunos;

use App\Http\Controllers\Controller;
use App\Models\Aluno;

class CriarAlunoService extends Controller
{
    public function executar(array $atributos)
    {
        return Aluno::create($atributos);
    }
}
