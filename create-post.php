<?php 
    require_once 'global.php'; 
    
    try {
        $criar = new Banco();
        $nome = $_POST['nome'];
        $criar->nome = $nome;

        $data = $_POST['datnasc'];
        $criar->datnasc = $data;

        $serie = $_POST['serie'];
        $criar->serie = $serie;

        $escola = $_POST['escola'];
        $criar->escola = $escola;

        $sexo = $_POST['sexo'];
        $criar->sexo = $sexo;

        $criar->inserir();

        header('Location: index.php');
    } catch (Exception $e) {
        Erro::errorHandling($e);
    }
