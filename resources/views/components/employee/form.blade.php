@props(['action', 'nome' => '', 'data_nascimento' => '', 'cpf' => '', 'nome_social' => '', 'update' => false, 'imagem' => ''])

<form action="{{ $action }}" method="post" enctype="multipart/form-data" style="padding-top: 2rem;">
    @csrf

    @if($update)
        @method('PUT')
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text"
                       id="nome"
                       name="nome"
                       class="form-control"
                       @isset($nome)value="{{ $nome }}"@endisset>
            </div>

            <div class="mb-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
                    <input type="text"
                        id="data_nascimento"
                        name="data_nascimento"
                        class="form-control"
                        @isset($data_nascimento)
                            @if(!empty($data_nascimento))
                            value="{{ $data_nascimento}}"
                            @endif
                        @endisset
                    oninput="formatarDataNascimento(this)">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF/CNPJ:</label>
                <input type="text"
                       id="cpf"
                       name="cpf"
                       class="form-control"
                       @isset($cpf)value="{{ $cpf }}"@endisset
                       oninput="formatarCPF(this)">
            </div>

            <div class="mb-3">
                <label for="nome_social" class="form-label">Nome Social:</label>
                <input type="text"
                       id="nome_social"
                       name="nome_social"
                       class="form-control"
                       @isset($nome_social)value="{{ $nome_social }}"@endisset>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem:</label>
                <input type="file"
                       id="imagem"
                       name="imagem"
                       class="form-control"
                       accept="image/*"
                       @isset($imagem)value="{{ $imagem }}"@endisset>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 d-flex justify-content-start align-items-center">

            <button type="submit" style="margin-right: 10px" class="btn btn-primary">
            {{ $update ? 'Atualizar' : 'Adicionar' }}
            </button>

            <a href="{{ route('employee.index') }}" class="btn btn-primary">Voltar</a>
        
        </div>
    </div>

</form>

<script>
    function formatarCPF(campo) {
        var valor = campo.value.replace(/\D/g, '').substring(0, 15);
        if (valor.length > 3 && valor.length < 6) {
            valor = valor.replace(/(\d{3})/, '$1.');
        } else if (valor.length > 6 && valor.length < 9) {
            valor = valor.replace(/(\d{3})(\d{3})/, '$1.$2.');
        } else if (valor.length > 9) {
            valor = valor.replace(/(\d{3})(\d{3})(\d{3})/, '$1.$2.$3-');
        }
        campo.value = valor;
    }

    function formatarDataNascimento(campo) {
        var valor = campo.value.replace(/\D/g, '').substring(0, 10);
        if (valor.length > 2 && valor.length < 5) {
            valor = valor.replace(/(\d{2})/, '$1/');
        } else if (valor.length > 5) {
            valor = valor.replace(/(\d{2})(\d{2})/, '$1/$2/');
        }
        campo.value = valor;
    }
</script>
