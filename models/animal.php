<?php 

require_once "../config/database.php";

class Animal {
    private $conexao;
    private $tabela = 'animal';

    protected $id_animal;
    protected $nome;
    protected $raca;
    protected $descricao;
    protected $idade;
    protected $porte;
    protected $sexo;
    protected $foto;


    public function __construct($db){
        $this->conexao = $db;
    }


    public function getIdAnimal($id_animal){
        $query = 'SELECT * FROM  {$this->tabela} WHERE id = {$this->id_animal}';
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function create($criarAnimal){
        if($criarAnimal){
            $query = 'INSERT INTO {$this->tabela}(nome, raca, descricao, idade, porte, sexo, foto) VALUES ("' .$this->nome . '", "' .$this->raca . '", "' .$this->descricao . '", "' .$this->idade . '", "' .$this->porte . '", "' .$this->sexo .  '", "' .$this->foto '");';
            return $query;
        } else {
            throw new Exception('Erro ao cadastrar animal', 777);
            
        }
    }

    public function read($lerAnimal){
        if($lerAnimal){
            echo 'SELECT * FROM {$this->tabela} WHERE id_animal = "' .$this->id_animal . '";';
        } else {
            throw new Exception('Erro ao indentificar o animal', 666)
        }
    }

    public function uptade($atualizarAnimal){
        $query = 'UPDATE {$this->tabela} SET';
        $colunasArray = array_keys($atualizarAnimal);
        if($atualizarAnimal){
            for($contador = 0; $contador < count($atualizarAnimal); $contador++){
                $coluna = $colunasArray[$contador];
                $valor = $atualizarAnimal[$coluna];

                $query .= $contador != (count($atualizarAnimal) - 1) ? $coluna .' = "'. $valor . '", ' : $coluna .' = "'. $valor .'" ';
            }
        } else {
            throw new Exception('Erro ao atualizar o animal' 999)
        }
    }

    public function delete($excluirAnimal){
        if($excluirAnimal){
            echo 'DELETE FROM {$this->tabela} WHERE id_animal = "' . $this->id_animal . '";';  
        } else {
            throw new Exception('Erro ao excluir o animal', 555)
        }
    }
}

 
?>