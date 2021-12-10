<?php

namespace App\Http\Controllers\Alunos;

use App\Http\Controllers\Controller;
use App\Http\Services\Alunos\VerAlunoService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VerAlunoController extends Controller
{
    protected  $servico;

    public function __construct(VerAlunoService $servico)
    {
        $this->servico = $servico;
    }

    public function executar(Request $request)
    {

        $aluno = $this->servico->executar($request->id);

        return response($aluno, Response::HTTP_OK);
    }
}
