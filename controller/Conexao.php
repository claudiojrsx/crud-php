<?php

class Conexao {
    public static function usarConexao() {
        $conexao = new PDO ('mysql:host=localhost;dbname=dbalunos', 'root', 'root');
        return $conexao;
    }
}