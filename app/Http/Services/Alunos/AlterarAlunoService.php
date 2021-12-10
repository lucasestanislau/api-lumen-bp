<?php

namespace App\Http\Services\Alunos;

use App\Http\Controllers\Controller;
use App\Models\Aluno;

class AlterarAlunoService extends Controller
{
    public function executar(int $idAluno, array $atributos)
    {
        $aluno = Aluno::findOrFail($idAluno);
        $aluno->fill($atributos);
        $aluno->save();

        return $aluno;
    }
}
