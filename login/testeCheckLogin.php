<?php


use classes\Usuario;
require '../classes/Usuario.class.php';
if ( isset($_POST)){
    $email = $_POST['user'];
    $senha = $_POST['pass'];
    
  
}


$usuario = new Usuario(0, $email, $senha, "");
error_reporting(0);
if ( $usuario->checkLogin()  ){
    session_start();
    echo "{ \"login\": \"true\", \"user\": \"".$_SESSION['idUsuario']."\"}";
}else {
    echo "{ \"login\": \"false\", \"user\": \"0\"}";
}


/*

use classes\Usuario;
use database\DBQuery;

require_once '../classes/Usuario.class.php';
require_once '../database/DBQuery.class.php';

$email = "";
$senha = "";

if (isset ($_POST)){
    $email = $_POST['user'];
    $senha = $_POST['pass'];
}

$usuario = new Usuario(0, $email, $senha, "");

$email = "cleber.gulhos@gmail";
$senha = "123456";
$usuario = new Usuario(0, $email, $senha, "");

 $usuario = new Usuario(0, "cleber.gulhos@gmail", "123456", "");

/*$email = "cleber.gulhos@gmail";
$senha = "123456";
$usuario = new Usuario(0, $email, $senha, "");

$variavel = "abc";

if ( $usuario->checkLogin() ){
    echo "O usuário Existe!";
}else{
    echo "O usuário ou senha NÃO existe!";
}

*Muitos testes ali em cima
*/

?>