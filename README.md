
```markdown

# Projeto PHP CRUD com Autenticação JWT

  

Este é um projeto PHP CRUD desenvolvido como parte de uma entrevista técnica para uma empresa de desenvolvimento de software. O projeto utiliza a autenticação JWT para cadastro de funcionários. As tecnologias utilizadas neste projeto são PHP, Laravel, JavaScript, CSS, Bootstrap e Blade.

  

## Tecnologias Utilizadas

  

- PHP

- Laravel

- JavaScript

- CSS

- Bootstrap

- Blade

  

## Como Executar o Projeto

  

Siga os passos abaixo para executar o projeto em seu ambiente local:

  

1. Clone o repositório utilizando o seguinte comando:

```sh

git clone https://github.com/Breno-Lima/CRUD-PHP-LARAVEL-JWT.git

```

  

2. Instale o PHP e o Composer. Para instalar o PHP, siga as instruções específicas do seu sistema operacional. Para instalar o Composer, siga as instruções no [site oficial do Composer](https://getcomposer.org/).

  

3. Descomente as seguintes linhas no arquivo `php.ini` para habilitar as extensões necessárias:

```ini

extension=fileinfo

extension=zip

extension=sqlite3

extension=pdo_sqlite

```

  

4. Navegue até o diretório do projeto e execute o seguinte comando para atualizar as dependências do Composer:

```sh

composer update

```

5.  Execute esse comando para que a chave JWT seja criada

```sh

```
 6. Acredito que assim que rodar também será necessário gerar a key JWT, mas o laravel se ecaminhará de apresentar o atalho.

7. Execute o servidor do Laravel utilizando o seguinte comando:

```sh

php artisan serve

```

  

## Dentro do ambiente

  

### Informações de login:

  

1. As senhas deverão ter no mínimo 6 caracteres.

  

2. Só é possível criar apenas uma conta com o mesmo e-mail.

  

3. Pode usar e-mail fictício, entretanto utilize o @.com.

  
  

### Informações do cadastro:

  

1. Se não for adicionada foto, o funcionário receberá uma foto padrão.

  

2. Sim, é possível criar um funcinário com o mesmo CPF hehe.

  

### Informações da arquitetura:

  

1. Devaneios de um dev front-end que não entende bem de arquitetura.