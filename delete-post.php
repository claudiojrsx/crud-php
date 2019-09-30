<?php require_once 'controller/Banco.php'; ?>

<?php

    $id = $_GET['id'];
    $excluir = new Banco($id);

    $excluir->delete();

    header('Location: index.php');