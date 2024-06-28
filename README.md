Bem vindo à minha primeira To-do-list!

Esse projeto tem como objetico principal, mostrar minhas habilidades com o uso das seguintes tecnologias, linguagens e frameworks que aprendi a usar nesses ultimos meses de estudo:

**IDE**
- VSCode

**Backend**
- PHP
- Laravel

**Frontend**
- HTML
- CSS
- Javascript Vanilla

**Versionamento**
- Git

**Banco de dados**
- MySQL

Eu sei que o projeto pode ser melhor feito utilizando frameworks e bibliotecas mais robustas, como o React, Vue.js, Angular, Boostrap e muitos outros.
Mas eu preciso consolidar o que estou aprendendo, e para isso que serve esse projeto. 

O projeto deve contar com algumas regras de negocio bem claras:

**Tabelas**

1 - Classificacao da tarefa (Enum) - Tabela com colunas(id, classificacao)
 a - To Do
 b - Doing
 c - Done

2 - Tarefa (Classe) - tabela com colunas(id, tarefa, classificacao_id(FK))
 a - Ex.: Cortar o cabelo
 b - Ex.: Levar o carro para revisão
 c - Ex.: Pagar contas do mês

3 - Pessoas
 a - Tipo da pessoa(Chefe, Colaborador)
 b - "Poderes" - para permitir que somente o chefe cadastre a tarefa 

***Como rodar o projeto?***

Na sua máquina você precisa ter as mesmas ferramentas que citei no Inicio do README.md

1 - Clone o projeto
2 - Faça a cópia do arquivo .emv.example e renomeie ele para .env
3 - Dentro do VSCode, use os seguintes comandos: 
- composer update
- php artisan key:generate
- php artisan migrate:fresh --seed
4 - Após isso, seu projeto está no ar e você pode acessar usando Laragon, Docker ou até mesmo o proprio php com o comando ´php artisan serve´
