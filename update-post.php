<?php 
    require_once 'controller/Banco.php';

    $id = $_POST['id'];
    $nome = $_POST['nome'];

    $banco = new Banco($id);
    $banco->nome = $nome;

    $banco->update();

    header('Location: index.php');