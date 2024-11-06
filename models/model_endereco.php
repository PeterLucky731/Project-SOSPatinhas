<?php 

class Endereco {
    private $conexao;
    private $tabela = 'endereco';

    protected $id_endereco;
    protected $cidade;
    protected $uf;
    protected $rua;
    protected $numero;
    protected $bairro;
    protected $complemento;


    public function __construct($db){
        $this->conexao = $db;
    }


    public function getIdEndereco($id_endereco){
        $query = 'SELECT * FROM  {$this->tabela} WHERE id = {$this->id_endereco}';
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function Criar($criarEndereco){
        if($criarEndereco){
            $query = 'INSERT INTO {$this->tabela}(cidade, uf, rua, numero, bairro, complemento) VALUES ("' .$this->cidade . '", "' .$this->uf . '", "' .$this->rua . '", "' .$this->numero . '", "' .$this->bairro . '", "' .$this->complemento . '");';
            return $query;
        } else {
            throw new Exception('Erro ao cadastrar endereço', 777);
            
        }
    }

    public function ler($lerEndereco){
        if($lerEndereco){
            echo 'SELECT * FROM {$this->tabela} WHERE id_endereco = "' .$this->id_endereco . '";';
        } else {
            throw new Exception('Erro ao indentificar o endereço', 666)
        }
    }

    public function Atualizar($atualizarEndereco){
        $query = 'UPDATE {$this->tabela} SET';
        $colunasArray = array_keys($atualizarEndereco);
        if($atualizarEndereco){
            for($contador = 0; $contador < count($atualizarEndereco); $contador++){
                $coluna = $colunasArray[$contador];
                $valor = $atualizarEndereco[$coluna];

                $query .= $contador != (count($atualizarEndereco) - 1) ? $coluna .' = "'. $valor . '", ' : $coluna .' = "'. $valor .'" ';
            }
        } else {
            throw new Exception('Erro ao atualizar o endereço' 999)
        }
    }

    public function Excluir($excluirEndereco){
        if($excluirEndereco){
            echo 'DELETE FROM {$this->tabela} WHERE id_endereco = "' . $this->id_endereco . '";';  
        } else {
            throw new Exception('Erro ao excluir o endereço', 555)
        }
    }
}


?>