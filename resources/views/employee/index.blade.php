<x-layout title="Funcionários">
    <a href="{{ route('employee.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <ul class="list-group">
        @foreach ($employee as $employee)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                @if($employee->imagem)
                <img src="{{ asset('storage/'.$employee->imagem) }}" alt="Imagem do funcionário" class="me-2 profile-image">
                @else
                <img src="{{ asset('storage/user.webp') }}" alt="Imagem padrão" class="me-2 profile-image">                
                @endif
                <a href="{{ route('employee.show', $employee->id) }}">{{ $employee->nome }}</a>
            </div>
            <span class="d-flex">
                <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-primary btn-sm">
                    Editar
                </a>

                <form action="{{ route('employee.destroy', $employee->id) }}" method="post" class="ms-2">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        Deletar
                    </button>
                </form>
            </span>
        </li>
        @endforeach
    </ul>

    <style>
    .profile-image {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }
    </style>
    
</x-layout>
