# Encurta AI - Projeto Laravel

Este é um projeto de encurtador de URLs desenvolvido com o framework Laravel.

## Pré-requisitos

Antes de começar, garanta que você tenha os seguintes softwares instalados em sua máquina:

-   **PHP >= 8.2**
-   **Composer** ([guia de instalação](https://getcomposer.org/doc/00-intro.md))

## ⚙️ Instalação

Siga os passos abaixo para configurar o ambiente de desenvolvimento local.

1.  **Clone o repositório:**

    ```bash
    git clone <url-do-seu-repositorio>
    cd encurta_ai
    ```

2.  **Instale as dependências do PHP:**

    ```bash
    composer install
    ```

3.  **Configure o arquivo de ambiente:**

    Copie o arquivo de exemplo `.env.example` para um novo arquivo chamado `.env`.

    ```bash
    cp .env.example .env
    ```

4.  **Gere a chave da aplicação:**

    Este comando irá gerar uma chave única para a sua aplicação e a inserirá no arquivo `.env`.

    ```bash
    php artisan key:generate
    ```

5.  **Configure o Banco de Dados:**

    Por padrão, o projeto está configurado para usar **mysql**.

    Se desejar usar outro banco de dados atualize as seguintes variáveis no seu arquivo `.env`:

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=sua_base_de_dados
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha
    ```

6.  **Execute as Migrations:**

    Este comando criará as tabelas necessárias no banco de dados.

    ```bash
    php artisan migrate
    ```

## 🚀 Executando a Aplicação

### Execução Manual

Se preferir, você pode iniciar os serviços manualmente em terminais separados:

1.  **Inicie o servidor de desenvolvimento do Laravel:**

    ```bash
    php artisan serve
    ```

## ✅ Executando os Testes

Para rodar a suíte de testes automatizados do projeto, execute o seguinte comando:

```bash
php artisan test
```
