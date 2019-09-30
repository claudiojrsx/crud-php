<?php require_once 'global.php'; ?>

<?php

    try {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $data = $_POST['datnasc'];
        $serie = $_POST['serie'];
        $escola = $_POST['escola'];
        $sexo = $_POST['sexo'];

        $update = new Banco($id);
        $update->nome = $nome;
        $update->datnasc = $data;
        $update->serie = $serie;
        $update->escola = $escola;
        $update->sexo = $sexo;

        $update->update();

        header('Location: index.php');
    } catch (Exception $e) {
        Erro::errorHandling($e);
    }
