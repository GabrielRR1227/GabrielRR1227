<?php
 
require_once  '../models/conexao.php' ;
 
// resgata os valores do formulário
$usuario = isset ( $_POST [ 'usuario' ]) ? $_POST [ 'usuário' ]: null ;
$senha = isset ( $_POST [ 'e-mail' ]) ? $_POST [ 'email' ]: null ;


// atualização do banco
$PDO = db_connect();
$sql = "UPDATE administrador SET email = :email WHERE usuario = :usuario" ;
$stmt = $PDO -> prepare ( $sql );
$stmt -> bindParam ( ':usuario' , $usuario );
$stmt -> bindParam ( ':e-mail' , $email);
 
if ( $stmt -> executar ())
{
    echo  '<script> alert ("Senha alterada com sucesso!"); location.href=("../index.php")</script>' ;
    saída;
}
outro

else {
    echo  "Erro ao alterar" ;
    print_r ( $stmt -> errorInfo ());
}
