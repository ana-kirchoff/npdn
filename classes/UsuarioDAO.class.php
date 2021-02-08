<?php

namespace classes;

use database\DBQuery;

require_once '../database/DBQuery.class.php';
require_once '../classes/Usuario.class.php';

class UsuarioDAO {
    
    private  $dbQuery;
    
    function __construct() {
        
        $tableName  = "usuario";
        $fields     = "idUsuario, email, senha";
        $keyField   = "idUsuario";
        
        $this->dbQuery = new DBQuery($tableName, $fields, $keyField);
    }
    
    public function create( Usuario $usuario ){
        $this->dbQuery->insert( $usuario->toArray() );
    }
    
    public function read( Usuario $usuario ){
        // return ( $this->dbQuery->select(" idUsuario ='". $usuario->getIdUsuario() ."'") );
        return ( $this->dbQuery->selectByField( "email", $usuario->getEmail() ));
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
    
    public function listByID ($idUsuario){
        return ( $this->dbQuery->select("idUsuario ='".$idUsuario."'") );
    }
    
    public function getUsuario(){
        return $this->usuario;
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