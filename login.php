<?php

 

// inclui o arquivo de inicialização

require '../models/conexao.php';

 

// resgata variáveis do formulário

$user = isset($_POST['user']) ? $_POST['user'] : '';

$pass = isset($_POST['e-mail']) ? $_POST['e-mail'] : '';

 

if (empty($user) || empty($pass))

{

    echo '<script> alert ("Insira um os dados!"); location.href=("../index.php")</script>';

    exit;

}

 

 

$PDO = db_connect();

 

$sql = "SELECT * FROM colaborador WHERE usuario = :user AND email = :email";

$stmt = $PDO->prepare($sql);

 

$stmt->bindParam(':user', $user);

$stmt->bindParam(':email', $email);

 

$stmt->execute();

 

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

 

if (count($users) <= 0)

{

    echo '<script> alert ("Usuário e Senha Incorretos"); location.href=("../index.php")</script>';

    exit;

}

 

// pega o primeiro usuário

$user = $users[0];

 

session_start();

$_SESSION['logged_in'] = true;

$_SESSION['user_name'] = $user['nome'];
$_SESSION['user_email'] = $user['email'];
$_SESSION['user_usuario'] = $user['usuario'];
$_SESSION['user_telefone'] = $user['telefone'];
 

header('Location: ../views/home.php');
