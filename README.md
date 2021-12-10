# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Utilização da API 

- Criar um banco de dados mysql chamado 'api-bp' (usuário: root, senha: '');
- Instalar o composer para executar a api
- Executar o comando na raiz do projeto: php -S localhost:8888 -t public/ 
- Executar o comando na raiz do projeto: php artisan migrate
- A url base da API é: http://localhost:8888, para acessar as rotas solicitadas no desafio apenas adicione o recurso "alunos".

*Exemplo: http://localhost:8888/alunos ao utilizar o método HTTP post, deve ser informado os parâmetros necessários: nome, email, data_nascimento, cpf (apenas números).




## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
