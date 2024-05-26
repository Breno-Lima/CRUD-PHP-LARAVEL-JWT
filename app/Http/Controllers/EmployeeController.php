<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeFormRequest;
use App\Models\Employee; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $employee = Employee::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('employee.index')->with('employee', $employee)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(EmployeeFormRequest $request)
{   
    $imagem = $request->hasFile('imagem') ? $request->file('imagem')->store('imagens', 'public') : null;

    $employeeData = [
        'nome' => $request->nome,
        'data_nascimento' =>  \Carbon\Carbon::createFromFormat('d/m/Y', $request->data_nascimento)->format('Y-m-d'),
        'cpf' => $request->cpf,
        'nome_social' => $request->nome_social,
    ];

    if ($imagem !== null) {
        $employeeData['imagem'] = $imagem;
    }

    $employee = Employee::create($employeeData);

    return redirect()->route('employee.index')
        ->with('mensagem.sucesso', "Funcionário '{$employee->nome}' adicionado com sucesso");
}

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employee.index') 
            ->with('mensagem.sucesso', "Funcionário '{$employee->nome}' removido com sucesso"); 
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit')->with('employee', $employee);
    }
   
    public function update(EmployeeFormRequest $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $data = [
            'nome' => $request->nome,
            'data_nascimento' => $request->data_nascimento,
            'cpf' => $request->cpf,
            'nome_social' => $request->nome_social,
        ];

        if ($request->hasFile('imagem')) {
            $novaImagem = $request->file('imagem')->store('imagens', 'public');
            if ($employee->imagem) {
                Storage::disk('public')->delete($employee->imagem);
            }
            $data['imagem'] = $novaImagem;
        }

        $employee->update($data);

        return redirect()->route('employee.index')
            ->with('mensagem.sucesso', "Funcionário '{$employee->nome}' atualizado com sucesso");
    }
    
    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }
    


}
