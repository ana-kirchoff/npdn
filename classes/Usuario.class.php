<?php

namespace classes;

use classes\UsuarioDAO;
use database\DBQuery;

require_once '../classes/UsuarioDAO.class.php';
require_once '../database/DBQuery.class.php';


class Usuario{
    
    private $idUsuario;
    private $email;
    private $senha;

    
    private $usuarioDAO;
    
    
    function  __construct( $idUsuario, $email, $senha){
         $this->setIdUsuario($idUsuario);
         $this->setEmail($email);
         $this->setSenha($senha);
         
         $this->usuarioDAO = new UsuarioDAO();
    }
    
    
    public function toArray() {
        return (
            array(
                $this->getIdUsuario(),
                $this->getEmail(),
                $this->getSenha(),

            )
        );
    }

    public function save(){
        if( $this->getIdUsuario() == 0){
            $this->usuarioDAO->create($this);
        }else {
            $this->usuarioDAO->update($this);
        }
    }
    
    public function checkLogin(){
        // Limpar o SQLInjection do Email e Senha
        $dbQuery = new DBQuery("", "", "");
        $this->email = $dbQuery->clearSQLInjection($this->email);
        $this->senha = $dbQuery->clearSQLInjection($this->senha);
        
        // Verificar quantas linhas um Select por Email e Senha realiza
        $resultSet =  $this->usuarioDAO->select(" email='".$this->email."' and senha='".$this->senha."' ");
        $qtdLines  =  mysqli_num_rows($resultSet);
        
        // Pegar o idUsuario da 1ª linha retornada do banco
        $lines =  mysqli_fetch_assoc($resultSet);
        $idUsuario = $lines["idUsuario"];
        
        
        
        // retorna aonde a função foi chamada TRUE ou FALSE para se tem mais de 0 linhas
        if ( $qtdLines > 0 ){
            // Gravar o IdUsuario e o Email em uma Sessão
            session_start();
            $_SESSION["idUsuario"] =  $idUsuario;
            $_SESSION["email"]     =  $this->email;
            return(true);
        }else{
            // Gravar o IdUsuario e o Email em uma Sessão
            session_start();
            unset($_SESSION["idUsuario"]);
            unset($_SESSION["email"]);
            return(false);
        }
    }

       
    
    public function read(){
        $this->usuarioDAO->read($this);
    }
    
    public function delete(){
        $this->usuarioDAO->delete($this);
    }
    
    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function listAll(){
        return ($this->usuarioDAO->listAll());
    }
    public function listAllJSon(){
        $rs     = $this->usuarioDAO->listAll();
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

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
        return $this;
    }

    public function getObservacao(){
        return $this->observacao;
    }

    public function setObservacao($observacao){
        $this->observacao = $observacao;
        return $this;
    }

}
