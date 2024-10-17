# API Rest Laravel - Produtos

Esta é uma API REST desenvolvida com Laravel para gerenciar produtos. O projeto utiliza o padrão DTO (Data Transfer Object) para a manipulação de dados e implementa autenticação básica.

## Requisitos

- PHP >= 8.0
- Composer
- PostgreSQL

## Instalação

1. **Clone o repositório:**
   ```bash
   git clone git@github.com:MarcoJunkes/api_rest_laravel.git
   cd api_rest_laravel

2. **Instale as dependências do PHP:**
    ```bash
    compose install

3. **Configura o banco de dados**
    - Crie um Banco de Dados no PostgreSQL e atualize as credenciais no arquivo .env

4. **Crie a chave da aplicação**
    ```bash
    php artisan key generate

5. **Execute as migrations para criar as tabelas no banco de dados**
    ```bash
    php artisan migrate

6. **Execute os seeders para popular o banco de dados**
    ```bash
    php artisan db:seed

7. **Execute o projeto**
    ```bash
    php artisan serve

# Endpoints Principais

1. **Autenticação**
    - Login
        - URL: /api/login
        - Método: POST

2. **Produtos**
    - Listar Produtos
        - URL: /api/produtos
        - Método: GET
    - Criar Produto
        - URL: /api/produtos
        - Método: POST
    - Atualizar Produto
        - URL /api/produtos/{id}
        - Método: PUT
    - Deletar Produto
        - URL: /api/produtos/{id}
        - Método: DELETE

# Estrutura do Projeto

1. **DTOs**
    - contém a classe `ProdutoDTO` para a transferência de dados relacionados a produtos.

2. **Controllers**
    - `ProdutoController`: Gerenciar as operações de CRUD dos produtos.
    - `AuthController`: Gerencia a autenticação de usuários.

3. **Requests**
    - Contém `ProdutoRequest` para a validação das requisições relacionadas a produtos.

4. **Resources**
    - Contém `ProdutoResource` para a formatação das respostas JSON para produtos

5. **Models**
    - `Produto` que representa a tabela de produtos no banco de dados.

6. **Migrations**
    - Estrutura do banco de dados.

7. **Seeders**
    - Dados iniciais para o banco de dados.

8. **tests**
    - Contém `ProdutoTest` que realiza uma simulação  de inserção no bd.
    - Para executar: `php artisan test`
        