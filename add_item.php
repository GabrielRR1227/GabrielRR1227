<?php

require_once  '../models/conexao.php' ;

$nome = isset ( $_POST [ 'nome' ]) ? $_POST [ 'nome' ]: null ;
$email = isset ( $_POST [ 'email' ]) ? $_POST [ 'email' ] : null ;
$cpf = isset ( $_POST [ 'cpf' ]) ? $_POST [ 'cpf' ] : null ;
$senha = isset ( $_POST [ 'telefone' ]) ? $_POST [ 'telefone' ]: null ;
 
 
// validação (bem simples, só pra evitar dados vazios)
if ( vazio ( $nome_reg ) || vazio ( $disponivel ))
{
    echo  '<script> alert ("Volte e os campos obrigatórios"); location.href=("../views/administrador/inventario.php")</script>' ;
    saída;
}
 
 
// insere no banco
$PDO = db_connect ();
$sql = "INSERT INTO items(nome, email, cpf, senha) VALUES(null, :nome, :email, :cpf, :telefone)" ;
$stmt = $PDO -> prepare ( $sql );
$stmt -> bindParam ( ':nome' , $nome );
$stmt -> bindParam ( ':email' , $email );
$stmt -> bindParam ( ':cpf' , $cpf );
$stmt -> bindParam ( ':telefone' , $telefone );
 
 
if ( $stmt -> executar ());
{
    header ( 'Localização: ../views/administrador/inventario.php' );
}
outro
{
    echo  "Erro ao cadastrar" ;
    print_r ( $stmt -> errorInfo ());
}
