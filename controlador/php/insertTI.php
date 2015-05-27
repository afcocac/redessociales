<?php
session_start();
require_once ('../../modelo/generated/include_dao.php');
$usuarioMySqlDAO = new UserMySqlDAO();
$email = $_POST['email'];

$arr = $usuarioMySqlDAO->queryByEmail($email);

if (count($arr) > 0) {

    echo "Loading...";
} else {
    

    $usuario = new User();
    $usuario->setEmail($email);
    $usuario->setState(1);
    $usuarioMySqlDAO->insert($usuario);
    echo "Loading...";
    
    
}

$_SESSION["email"] = $email;

$content = <<< AF
                    <script>location='login-with.php?provider={$_SESSION["provider"]}';</script>      
AF;
                    echo $content;
