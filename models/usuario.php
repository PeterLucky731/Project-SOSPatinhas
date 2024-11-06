<?php

require_once "../config/database.php"

class Usuario{
    private $conexao;
    private $table = 'usuario';

    public $id;
    public $nome;
    public $email;
    public $senha;
    public $data_nasc;
    public $cpf;
    public $rg;
    public $telefone;
    public $foto;
    public $id_endereco;


    public function __construct($bd){
        $this->conexao = $bd;
    }

    public function getIdUsuario($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = {$this->id}";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MSQLI_ASSOC);
    }


    public function Create(){
        $query = "INSERT INTO {$this->table} (nome,email,senha,data_nasc,cpf,rg,telefone,foto) VALUES ('{$this->nome}','{$this->email}','{$this->senha}','{$this->data_nasc}','{$this->cpf}','{$this->rg}','{$this->telefone}','{$this->foto}','{$this->id_endereco}');"; 
        return $this->conexao->query($query);
        
    }
    
    public function Read() {
        $query = "SELECT * FROM {$this->table}"; 
        return $this->conexao->query($query);
    }
    
    public function Update(){
        $query = "UPDATE {$this->table} SET nome = ?, email = ?, senha = ?, data_nasc = ?, cpf = ?, rg = ?, telefone = ?, foto = ?, id_endereco = ? WHERE id = ?";
        return $this->conexao->query($query);
    }
    
    public function Delete(){
        $query = "DELETE FROM {$this->table} WHERE {$this->id}";
        return $this->conexao->query($query);
    }
}
