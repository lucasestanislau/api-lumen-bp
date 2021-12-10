<?php

namespace App\Http\Controllers\Alunos;

use App\Http\Controllers\Controller;
use App\Http\Services\Alunos\CriarAlunoService;
use App\Http\Validators\Alunos\CriarAlunoRequestValidator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CriarAlunoController extends Controller
{
    protected  $servico;
    protected  $validador;

    public function __construct(CriarAlunoService $servico,  CriarAlunoRequestValidator $validador)
    {
        $this->servico = $servico;
        $this->validador = $validador;
    }

    public function executar(Request $request)
    {
        $this->validador->validar($request);

        $aluno = $this->servico->executar($request->all());

        return response($aluno, Response::HTTP_CREATED);
    }
}
