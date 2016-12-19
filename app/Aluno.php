<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
	protected $table = 'alunos';
	public $timestamps = false;
	protected $fillable = array('codigo', 'nome', 'data_nascimento', 'naturalidade', 'nomo_pai', 'nome_mae', 'telefone_contato', 'created_at');
	protected $guarded = ['id'];
}

