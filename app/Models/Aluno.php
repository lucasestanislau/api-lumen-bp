<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{

    protected $table = 'alunos';

    protected $fillable = ['nome', 'cpf', 'data_nascimento'];

    static function regrasValidacao()
    {

        return [
            'nome' => 'string|required|max:120',
            'email' => 'string|email|required|max:200',
            'cpf' => 'string|required|max:11',
            'data_nascimento' => 'date_format:Y-m-d|required',
        ];
    }

    static function mensagensValidacao()
    {
        return [
            'nome.string' => 'Tipo inválido',
            'nome.required' => 'Nome é obrigatório',
            'nome.max' => 'Máximo de 120 caracteres',
            'email.string' => 'Tipo inválido',
            'email.required' => 'Email é obrigatório',
            'email.email' => 'Formato do e-mail é inválido',
            'email.max' => 'Máximo de 200 caracteres',
            'cpf.string' => 'Tipo inválido',
            'cpf.required' => 'Cpf é obrigatório',
            'cpf.max' => 'Máximo de 11 caracteres',
            'data_nascimento.date_format' => 'Formato inválido',
            'data_nascimento.required' => 'Data de nascimento é obrigatório',
        ];
    }
}
