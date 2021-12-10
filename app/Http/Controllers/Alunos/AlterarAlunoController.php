<?php

namespace App\Http\Controllers\Alunos;

use App\Http\Controllers\Controller;
use App\Http\Services\Alunos\AlterarAlunoService;
use App\Http\Validators\Alunos\AlterarAlunoRequestValidator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AlterarAlunoController extends Controller
{
    protected  $servico;
    protected  $validador;

    public function __construct(AlterarAlunoService $servico,  AlterarAlunoRequestValidator $validador)
    {
        $this->servico = $servico;
        $this->validador = $validador;
    }

    public function executar(Request $request)
    {
        $this->validador->validar($request);

        $aluno = $this->servico->executar($request->id, $request->all());

        return response($aluno, Response::HTTP_OK);
    }
}
