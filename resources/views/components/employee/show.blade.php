<div class="container mt-5">
    <form>
        <fieldset disabled>
            <div class="mb-3 d-flex flex-wrap align-items-center">
                @if($employee->imagem)
                <img src="{{ asset('storage/'.$employee->imagem) }}" alt="Imagem do funcionário" class="me-2 employee-image">
                @else
                <img src="{{ asset('storage/user.png') }}" alt="Imagem padrão" class="me-2 employee-image">                
                @endif
                <div class="ms-md-3 mt-3 mt-md-0">
                    <div class="mb-3">
                        <label class="form-label"><strong>Nome:</strong></label>
                        <input type="text" class="form-control" value="{{ $employee->nome }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Nome Social:</strong></label>
                        <input type="text" class="form-control" value="{{ $employee->nome_social }}">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>CPF:</strong></label>
                <input type="text" class="form-control" value="{{ $employee->cpf }}">
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Data de Nascimento:</strong></label>
                <input type="text" class="form-control" value="{{ $employee->data_nascimento }}">
            </div>
        </fieldset>
        <a href="{{ route('employee.index') }}" class="btn btn-primary mt-3">Voltar</a>
    </form>
</div>

<style>
    .employee-image {
        width: 100%;
        max-width: 300px;
        height: auto;
        object-fit: cover;
        border-radius: 50%;
    }

    @media (min-width: 768px) {
        .wider-input {
            width: 100%;
            max-width: 800px;
        }
    }
</style>
