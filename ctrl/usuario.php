<?php

require_once '../classes/Usuario.class.php';
use classes\Usuario;


$metodoHTTP = $_SERVER['REQUEST_METHOD'];

switch ($metodoHTTP ) {
    case 'GET':
            $usuario = new Usuario(0, "", "", "");
            echo  $usuario->listAllJSon();
    break;
    case 'POST':
            $idUsuario  = $_POST['idUsuario'];
            $email      = $_POST['email'];
            $senha      = $_POST['senha'];         
            $usuario = new Usuario($idUsuario, $email, $senha);
            $usuario->save();
            echo "Usuária(o) Salva(o)";
    break;
}





?>