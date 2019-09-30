<?php 
    require_once 'controller/Banco.php';
    
    $banco = new Banco();
    $lista = $banco->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Lista de alunos</title>
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/style.css">
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Lista de alunos</h1>
        </div>
        <a href="create.php" class="btn btn-primary mb-2">Novo aluno</a>
        <table class="table table-hover table-bordered table-dark">
            <thead>
                <tr>
                    <th class="text" scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data de nascimento</th>
                    <th scope="col">Série</th>
                    <th scope="col">Escola</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Alterar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($lista as $linha): ?>
                <tr>
                    <td><a class="btn btn-link"><?php echo $linha['id'] ?></td>
                    <td><a class="btn btn-link"><?php echo $linha['nome'] ?></a></td>
                    <td><a class="btn btn-link"><?php echo $linha['datnasc'] ?></a></td>
                    <td><a class="btn btn-link"><?php echo $linha['serie'] ?></td>
                    <td><a class="btn btn-link"><?php echo $linha['escola'] ?></td>
                    <td><a class="btn btn-link"><?php echo $linha['sexo'] ?></td>
                    <td><a href="update.php?id=<?php echo $linha['id'] ?>" class="btn btn-warning btn-sm">Alterar</a></td>
                    <td><a href="delete-post.php?id=<?php echo $linha['id'] ?>" class="btn btn-danger btn-sm">Excluir</a></td>
                </tr>
            <?php endforeach ?>
            </tbody>    
        </table>
</body>

</html>
