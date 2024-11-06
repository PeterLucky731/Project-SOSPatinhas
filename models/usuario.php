<?php
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


    public function getIdUsuario($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = {$this->id}";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MSQLI_ASSOC);
    }


    public function Create(){
        $query = "INSERT INTO {$this->table} (nome,email,senha,data_nasc,cpf,rg,telefone,foto)" 
    }
}