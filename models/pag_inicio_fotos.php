<?php 

class InicialFotos {
    private $conexao;
    private $tabela = 'pagInicial_fotos';

    protected $id_pagInicio_fotos;
    protected $foto;
    protected $texto;
    

    public function __construct($db){
        $this->conexao = $db;
    }


    public function getIdAnimal($id_pagInicial_fotos){
        $query = 'SELECT * FROM  {$this->tabela} WHERE id = {$this->id_pagInicial_fotos}';
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function Criar($criarPagInicial_fotos){
        if($criarPagInicial_fotos){
            $query = 'INSERT INTO {$this->tabela}(foto,texto) VALUES ("' .$this->foto . '", "' .$this->texto'");';
            return $query;
        } else {
            throw new Exception('Erro ao adicionar foto ', 777);
            
        }
    }

    public function ler($lerPagInicial_fotos){
        if($lerPagInicial_fotos){
            echo 'SELECT * FROM {$this->tabela} WHERE id_pagInicio_fotos = "' .$this->id_pagInicio_fotos . '";';
        } else {
            throw new Exception('Erro ao indentificar a foto', 666)
        }
    }

    public function Atualizar($atualizarPagInicio_fotos){
        $query = 'UPDATE {$this->tabela} SET';
        $colunasArray = array_keys($atualizarPagInicio_fotos);
        if($atualizarPagInicio_fotos){
            for($contador = 0; $contador < count($atualizarPagInicio_fotos); $contador++){
                $coluna = $colunasArray[$contador];
                $valor = $atualizarPagInicio_fotos[$coluna];

                $query .= $contador != (count($atualizarPagInicio_fotos) - 1) ? $coluna .' = "'. $valor . '", ' : $coluna .' = "'. $valor .'" ';
            }
        } else {
            throw new Exception('Erro ao atualizar a foto' 999)
        }
    }

    public function Excluir($excluirPagInicio_foto){
        if($excluirPagInicio_foto){
            echo 'DELETE FROM {$this->tabela} WHERE id_pagInicio_fotos = "' . $this->id_pagInicio_fotos . '";';  
        } else {
            throw new Exception('Erro ao excluir a imagem ', 555)
        }
    }
}


?>