<?php

namespace App\Http\Services\Alunos;

use App\Http\Controllers\Controller;
use App\Models\Aluno;

class VerAlunoService extends Controller
{
    public function executar(int $idAluno)
    {
        return Aluno::findOrFail($idAluno);
    }
}
