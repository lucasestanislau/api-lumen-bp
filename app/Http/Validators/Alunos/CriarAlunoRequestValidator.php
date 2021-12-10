<?php

namespace App\Http\Validators\Alunos;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Illuminate\Http\Request;

class CriarAlunoRequestValidator extends Controller
{
    public function validar(Request $request)
    {
        $this->validate($request, Aluno::regrasValidacao(), Aluno::mensagensValidacao());
    }
}
