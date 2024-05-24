<x-layout title="Novo Funcionário">
    <form action="{{ route('employee.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text"
                       autofocus
                       id="nome"
                       name="nome"
                       class="form-control"
                       value="{{ old('nome') }}">
            </div>
            <div class="col-2">
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input type="text"
                       id="data_nascimento"
                       name="data_nascimento"
                       class="form-control"
                       value="{{ old('data_nascimento') }}"
                       oninput="formatarDataNascimento(this)">
            </div>

            <div class="col-2">
                <label for="cpf" class="form-label">CPF/CNPJ</label>
                <input type="text"
                       id="cpf"
                       name="cpf"
                       class="form-control"
                       value="{{ old('cpf') }}"
                       oninput="formatarCPF(this)">
            </div>

            <div class="col-8" style="padding-top: 2rem;">
                <label for="nome_social" class="form-label">Nome Social:</label>
                <input type="text"
                       id="nome_social"
                       name="nome_social"
                       class="form-control"
                       value="{{ old('nome_social') }}">
            </div>

            <div class="col-8" style="padding-top: 2rem;">
                <label for="imagem" class="form-label">Imagem:</label>
                <input type="file"
                       id="imagem"
                       name="imagem"
                       class="form-control"
                       accept="image/">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
    <a href="{{ route('employee.index') }}" class="btn btn-primary mt-3">Voltar</a>
    <script>
        function formatarCPF(campo) {
            var valor = campo.value.replace(/\D/g, '').substring(0, 11);
            valor = valor.replace(/(\d{3})(\d)/, '$1.$2');
            valor = valor.replace(/(\d{3})(\d)/, '$1.$2');
            valor = valor.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
            campo.value = valor;
        }

        function formatarDataNascimento(campo) {
            var valor = campo.value.replace(/\D/g, '').substring(0, 8);
            if (valor.length > 4) {
                valor = valor.replace(/(\d{2})(\d{2})(\d{4})/, '$1/$2/$3');
            } else if (valor.length > 2) {
                valor = valor.replace(/(\d{2})(\d{2})/, '$1/$2');
            }
            campo.value = valor;
        }
    </script>
</x-layout>
