<?php require_once 'controller/Banco.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Criar novo aluno</title>
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Cadastrar novo aluno</h1>
        </div>
    </div>
    <div class="container">
        <form action="create-post.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="nome" placeholder="Nome *">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="datnasc" placeholder="Data de Nascimento *">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="serie" placeholder="Série *">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="escola" placeholder="Escola *">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="sexo" placeholder="Sexo *">
            </div>
            <button type="submit" class="btn btn-success" value="Salvar">Salvar</button>
            <a href="index.php" class="btn btn-danger">Voltar</a>
        </form>
    </div>
</body>

</html>