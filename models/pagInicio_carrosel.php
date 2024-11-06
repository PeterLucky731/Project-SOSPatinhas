<?php
    require_once "../config/database.php";

    class PagInicio_carrosel{
        private $conexao;
        private $tabela = 'pagInicio_carrosel';

        public $id_pagInicio_carrosel;
        public $foto;
        public $texto;

        public function __construct($db){
            $this->conexao = $db;
        }

        public function getIdLivro($id_pagInicio_carrosel){
            $query = "SELECT * FROM {$this->tabela} WHERE id = {$this->id_pagInicio_carrosel}";
            $resultado = $this->conexao->query($query);
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

        public function create(){
            $query = "INSERT INTO {$this->tabela} (foto, texto) VALUES ($this->foto, '$this->texto');";
            $resultado = $this->conexao->query($query);
            return $resultado;
        }

        public function read($coluna, $valor){
            $query = "SELECT * FROM {$this->tabela} WHERE {$coluna} = {$valor};";
            $resultado = $this->conexao->query($query);
            return $resultado;
        }
        
        public function update($valores){
            $query = "UPDATE {$this->tabela} SET ";
            $colunasArray = array_keys($valores);

            for($contador = 0; $contador < count($valores); $contador ++){
                $coluna = $colunasArray[$contador];
                $valor = $valores[$coluna];

                $query .= $contador != (count($valores)-1) ? $coluna . '= "'. $valor .'", ': $coluna . '= "'. $valor .'" ';
            }

            $query += "WHERE id_livro = {$this->id_pagInicio_carrosel};";
            $resultado = $this->conexao->query($query);
            return $resultado;
        }

        public function delete(){
            $query = "DELETE FROM {$this->tabela} WHERE id_pagInicio_carrosel = {$this->id_pagInicio_carrosel};";
            $resultado = $this->conexao->query($query);
            return $resultado;
        }
    }