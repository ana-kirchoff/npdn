<<?php

namespace classes;

use classes\ProjetosDAO;
use database\DBQuery;

require_once '../classes/ProjetosDAO.class.php';
require_once '../database/DBQuery.class.php';


class Pesquisas{
    
    private $id;
    private $nome;
    private $data;
    private $descricao;
    private $situacao;
        
    
    function  __construct( $id, $nome, $data, $descricao, $situacao ){
        $this->setIdUsuario($id);
        $this->setNome($nome);
        $this->setData($data);
        $this->setDescricao($descricao);
        $this->setSituacao($situacao);
        
        $this->projetosDAO = new projetosDAO();
    }
    
    
    public function toArray() {
        return (
            array(
                $this->getIdUsuario(),
                $this->getNome(),
                $this->getData(),
                $this->getDescricao(),
                $this->getSituacao(),
            )
            );
    }
    
    public function save(){
        if( $this->getIdUsuario() == 0){
            $this->projetosDAO->create($this);
        }else {
            $this->projetosDAO->update($this);
        }
    }
    
    
    public function read(){
        $this->projetosDAO->read($this);
    }
    
    public function delete(){
        $this->projetosDAO->delete($this);
    }
    
    public function getIdUsuario(){
        return $this->idUsuario;
    }
    
    public function listAll(){
        return ($this->projetosDAO->listAll());
    }
    public function listAllJSon(){
        $rs     = $this->projetosDAO->listAll();
        $lines  = array();
        while($line = mysqli_fetch_assoc($rs)) {
            $lines[] = $line;
        }
        echo (json_encode($lines));
    }
    
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
        return $this;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }
    
    public function getData(){
        return $this->data;
    }
    
    public function setData($data){
        $this->data = $data;
        return $this;
    }
    
    public function getDescricao(){
        $this->descricao = $descricao;
        return $this->descricao;
    }
    
    public function setDescricao($descricao){
        $this->descricao= $descricao;
        return $this;
    }
    
}
