<?php
require_once "../config/database.php";

class Pagamento{
    private $conexao;
    private $tabela = 'pagamento';

    public $id_pagamento;
    public $fotoQRCode;
    public $chave;
    public $nome_da_conta;
    public $conta;
    public $agencia;

    public function __construct($db) {
        $this->conexao = $db;
    }

    public function getIdLivro($id_pagamento) {
        $query = "SELECT * FROM {$this->tabela} WHERE id = {$id_pagamento}";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function create() {
        $verificar = "SELECT COUNT(*) FROM {$this->tabela} WHERE id_pagamento = '{$this->id_pagamento}';";
        $resultadoVerificar = $this->conexao->query($verificar);

        if ($resultadoVerificar && $resultadoVerificar->fetch_row()[0] > 0) {
            return "Pagamento já cadastrado!";
        }

        $query = "INSERT INTO {$this->tabela} (fotoQRCode, chave, nome_da_conta, conta, agencia) VALUES ('{$this->fotoQRCode}', '{$this->chave}', '{$this->nome_da_conta}', '{$this->conta}', '{$this->agencia}');";

        $resultado = $this->conexao->query($query);
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_pagamento = '{$this->id_pagamento}';";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }

    public function update(){
        $verificaSeExiste = "SELECT COUNT(*) FROM {$this->tabela} WHERE id_pagamento = '{$this->id_pagamento}';";
        $resultadoVerificacao = $this->conexao->query($verificaSeExiste);
    
        if ($resultadoVerificacao && $resultadoVerificacao->fetchColumn() === 0) {
            return "Pagamento cadastrado não encontrado!";
        }

        $query = "UPDATE {$this->tabela} SET ";
        $colunasArray = array_keys($valores);

        for($contador = 0; $contador < count($valores); $contador ++){
            $coluna = $colunasArray[$contador];
            $valor = $valores[$coluna];

            $query .= $contador != (count($valores)-1) ? $coluna . '= "'. $valor .'", ': $coluna . '= "'. $valor .'" ';
        }

        $query += "WHERE id_pagamento = {$this->id_pagamento};";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_pagamento = {$this->id_pagamento};";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }
}