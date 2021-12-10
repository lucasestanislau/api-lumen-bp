<?php

namespace App\Http\Controllers\Alunos;

use App\Http\Controllers\Controller;
use App\Http\Services\Alunos\CriarAlunoService;
use App\Http\Services\Alunos\ListarAlunosService;
use App\Http\Validators\Alunos\CriarAlunoRequestValidator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ListarAlunosController extends Controller
{
    protected  $servico;

    public function __construct(ListarAlunosService $servico)
    {
        $this->servico = $servico;
    }

    public function executar(Request $request)
    {
        $alunos = $this->servico->executar();

        return response($alunos, Response::HTTP_OK);
    }
}
