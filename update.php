<?php 
    require_once 'controller/Banco.php';

    $id = $_GET['id'];
    $banco = new Banco($id);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Atualizar aluno</title>
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/style.css">
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Atualizar dados do aluno</h1>
        </div>
    </div>
    <div class="container">
        <form action="update-post.php" method="post">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $banco->id ?>">
                <input type="text" value="<?php echo $banco->nome ?>" class="form-control" name="nome"
                    placeholder="Nome *">
            </div>
            <div class="form-group">
                <input type="text" value="<?php echo $banco->datnasc ?>" class="form-control" name="datnasc"
                    placeholder="Data de Nascimento *">
            </div>
            <div class="form-group">
                <input type="text" value="<?php echo $banco->serie ?>" class="form-control" name="serie"
                    placeholder="Série *">
            </div>
            <div class="form-group">
                <input type="text" value="<?php echo $banco->escola ?>" class="form-control" name="escola"
                    placeholder="Escola *">
            </div>
            <div class="form-group">
                <input type="text" value="<?php echo $banco->sexo ?>" class="form-control" name="sexo"
                    placeholder="Sexo *">
            </div>
            <input type="submit" class="btn btn-warning" value="Atualizar">
            <a href="index.php" class="btn btn-danger">Voltar</a>
        </form>
    </div>
</body>

</html>