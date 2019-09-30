<?php require_once 'global.php'; ?>

<?php

    try {
        $id = $_GET['id'];
        $excluir = new Banco($id);

        $excluir->delete();

        header('Location: index.php');
    } catch (Exception $e) {
        Erro:errorHandling($e);
    }
