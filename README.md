# Projeto CRUD em PHP - Bootstrap, PDO & MySQL

Desenvolvimento de um simples projeto CRUD (Cadastro de Alunos) utilizando o acesso a banco de dados com o MySQL e linguagem PHP.

## Assuntos Abordados no Desenvolvimento do Projeto:

- Acesso a banco de dados com o MySql
- Otimização da conexão com o banco de dados através do PDO (PHP Data Object)
- Uso de linguagens, como: HTML e CSS
- Uso do framework Bootstrap para realização de um layout responsivo para o projeto.

## Configuração do Projeto:

- Executar a query dbalunos.sql ou importar o arquivo no MySQL Workbench para criar a table necessária.
- Editar o arquivo **Conexao.php - que se encontra na pasta controller**

```
$conexao = new PDO ('mysql:host=localhost;dbname=dbalunos', 'suaSenha', 'suaSenha');

```