<x-layout title="Ver Funcionário '{!! $employee->nome !!}'">
    <x-employee.show
        :nome="$employee->nome"
        :data_nascimento="$employee->data_nascimento"
        :cpf="$employee->cpf"
        :nome_social="$employee->nome_social"
        :image="$employee->imagem"
        :employee="$employee"
    />
</x-layout>