<x-layout title="Editar Funcionário '{!! $employee->nome !!}'">
<x-employee.form
    :action="route('employee.update', $employee->id)"
    :nome="$employee->nome"
    :data_nascimento="$employee->data_nascimento ?? ''"
    :cpf="$employee->cpf"
    :nome_social="$employee->nome_social"
    :image="$employee->imagem"
    :employee="$employee" 
    :update="true"
/>
</x-layout>
