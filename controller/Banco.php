<?php
require_once 'Conexao.php';

class Banco {

    public $id, $nome, $data, $serie, $escola, $sexo;

    public function __construct($id = false) {
        if ( $id ) {
            $this->id = $id;
            $this->info();
        }
    }

    public function listar()
    {
        $query = "SELECT * FROM tbalunos";
        $conexao = Conexao::usarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function info() {
        $query = "SELECT * FROM tbalunos WHERE id = " . $this->id;
        $conexao = Conexao::usarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha) {
            $this->nome = $linha['nome'];
            $this->datnasc = $linha['datnasc'];
            $this->serie = $linha['serie'];
            $this->escola = $linha['escola'];
            $this->sexo = $linha['sexo'];
        }
    }

    public function inserir() {
        $query = "INSERT INTO tbalunos (nome, datnasc, serie, escola, sexo) 
        VALUES ('". $this->nome ."', '". $this->datnasc ."', '". $this->serie ."', '". $this->escola ."', '". $this->sexo ."')";
        $conexao = Conexao::usarConexao();
        $conexao->exec($query);
    }

    public function update() {
        $query = "UPDATE tbalunos SET nome, '" . $this->nome ."' WHERE id = " . $this->id;       
        $conexao = Conexao::usarConexao();
        $conexao->exec($query);
    }
}
