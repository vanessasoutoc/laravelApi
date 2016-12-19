<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
	//

	public function index(){
		
		$alunos = Aluno::all();
		return response()->json($alunos);
		
	}
}
