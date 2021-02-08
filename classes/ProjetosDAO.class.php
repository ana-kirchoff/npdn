<?php

namespace classes;

use database\DBQuery;

require_once '../database/DBQuery.class.php';
require_once '../classes/Projeto.class.php';

class ProjetosDAO {
    
    private  $dbQuery;
    
    function __construct() {
        
        $tableName  = "pesquisas";
        $fields     = "id, nome, data, descricao, situacao";
        $keyField   = "id";
        $this->dbQuery = new DBQuery($tableName, $fields, $keyField);
    }
    
    public function create( pesquisas $nome ){
        $this->dbQuery->insert( $nome->toArray() );
    }
    
    public function read( pesquisas $nome ){
        // return ( $this->dbQuery->select(" idUsuario ='". $usuario->getIdUsuario() ."'") );
        return ( $this->dbQuery->selectByField( "Nome", $nome->getNome() ));
    }
    
    public function select( $where ){
        return ( $this->dbQuery->select($where) );
    }
    
    public function update( Usuario $usuario ){
        $this->dbQuery->update( $usuario->toArray() );
    }
    
    public function delete( Usuario $usuario ){
        $this->dbQuery->delete($usuario->getIdUsuario());
    }
    
    public function listAll (){
        return ( $this->dbQuery->select("") );
    }
    
    public function listByID ($id){
        return ( $this->dbQuery->select("Id ='".$id."'") );
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function setUsuario($usuario){
        $this->usuario = $usuario;
        return $this;
    }
    
    
    public function getDbQuery(){
        return $this->dbQuery;
    }
    
    public function setDbQuery($dbQuery){
        $this->dbQuery = $dbQuery;
        return $this;
    }
    
}

?>