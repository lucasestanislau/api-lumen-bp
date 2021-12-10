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
            'data_nascimento' => 'date_format:Y-m-d|required|format',
        ];
    }
}
