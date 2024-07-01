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
- Javascript

**Versionamento**
- Git

**Banco de dados**
- MySQL

Eu sei que o projeto pode ser melhor feito utilizando frameworks e bibliotecas mais robustas, como o React, Vue.js, Angular, Boostrap e muitos outros.
Mas eu preciso consolidar o que estou aprendendo, e para isso que serve esse projeto. 

O projeto deve contar com algumas regras de negocio bem claras:

**Tabelas**

1 - Classificacao da tarefa (Enum) - Tabela com colunas(id, classificacao)
 - To Do
 - Doing
 - Done

2 - Tarefa (Classe) - tabela com colunas(id, tarefa, classificacao_id(FK))
 - Ex.: Cortar o cabelo
 - Ex.: Levar o carro para revisão
 - Ex.: Pagar contas do mês

3 - Pessoas
 - Tipo da pessoa(Chefe, Colaborador)
 - Nome

4 - Tipo de pessoa(Perfil)
 - A partir daqui liberarei os poderes de cada perfil
 - Admin, chefe e colaborador

**Como rodar o projeto?**

Na sua máquina você precisa ter as mesmas ferramentas que citei no Inicio do README.md

***Regras de negócio***

__Uso de Midlewares com @can__
- O usuário final precisa criar uma conta no sistema
- O Usuário do tipo Colaborador só pode ver as proprias tarefas
- O Usuário do tipo Chefe pode ver todas as tarefas
