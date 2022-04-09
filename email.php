<?php
 
require_once '../models/conexao.php';
 
// resgata os valores do formulário
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
$senha = isset($_POST['e-mail']) ? $_POST['email'] : null;


// atualiza o banco
$PDO = db_connect();
$sql = "UPDATE colaborador SET email = :email WHERE usuario = :usuario";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':e-mail', $email);
 
if ($stmt->execute())
{
    echo '<script> alert ("Senha alterada com sucesso!"); location.href=("../index.php")</script>';
    exit;
}
else
{
    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}
