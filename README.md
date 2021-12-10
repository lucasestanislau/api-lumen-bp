

## Utilização da API 

- Criar um banco de dados mysql chamado 'api-bp' (usuário: root, senha: '');
- Instalar o composer para executar a api
- Executar o comando na raiz do projeto: php -S localhost:8888 -t public/ 
- Executar o comando na raiz do projeto: php artisan migrate
- A url base da API é: http://localhost:8888, para acessar as rotas solicitadas no desafio apenas adicione o recurso "alunos".

*Exemplo: http://localhost:8888/alunos ao utilizar o método HTTP post, deve ser informado os parâmetros necessários: nome, email, data_nascimento, cpf (apenas números).

## Rotas disponíveis

- Ver um aluno: (GET) http://localhost:8888/alunos/1 
- Criar aluno: (POST) http://localhost:8888/alunos/1 
- Alterar aluno: (PUT) http://localhost:8888/alunos/1 
- Listar os alunos: (GET) http://localhost:8888/alunos 

## Corpo da requisição

{
	"nome" : "Lucas",
	"email" : "lucas@lucas.com",
	"cpf": "01245878956",
	"data_nascimento": "1998-11-14"
}

