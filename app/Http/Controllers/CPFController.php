<?php

namespace App\Http\Controllers;

use App\Models\CPF;



class CPFController extends Controller
{
    public function index(CPF $cpf)
    {
        $cpf = $cpf->load('employee'); 

        return view('cpf.index')->with('cpf', $cpf);
    }
}