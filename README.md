<h1 align="center">
  <img src=".github/logo.svg"></img>
</h1>

## 🚀 Objetivo

API construída em laravel que permite gerenciar adição, visualização, remoção e edição de artigos jornalisticos no site Tecnoblog. Front-End disponivel [aqui](https://github.com/aldotheapache1/TecnoBlog).

## 🌐 Funcionamento

```bash
# 1º Instale o Laravel seguindo as instruções no link abaixo:
https://laravel.com/docs/8.x/installation

# 2º Clone o repositório.
git clone https://github.com/aldotheapache1/TecnoBlog-Back-End.git

# 3º Crie ou modifique o arquivo .env com as informações da sua base de dados

# 4º Execute o comando abaixo para instalar as dependências 
composer install
# 5º Execute o comando abaixo para criar a chave jwt
php artisan jwt:secret

# 6º Após a conexão do banco de dados estar estabelecida, execute o comando abaixo, para criar a estrutura no seu banco de dados.
php artisan migrate

# 6º Por fim, execute o comando abaixo, assim a api começará a funcionar.
php artisan serve

```
