<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamentop Liceu</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
</head>

<body>
  <div2> <img src ="fundo.png.jpeg" img/> </div2>
    <div class="principal">
        <div class="form-login">
            <h1 class="logo">Agendamento Liceu</h1>
            <form action="controller/login.php" method="post">
                <input type="text" name="name" id="name" placeholder="Nome: " required>
                <input type="text" name="e-mail" id="e-mail" placeholder="Email: " required>
                <input type="text" name="text" id="text" placeholder="Telefone: " required>
                <input id="acess" type="submit" value="Enviar">
            </form>
            <h4 class="title">Você é administrador? <a href="views/administrador/login.php">Acesse aqui</a></h4>
            <h4 class="title">Esqueceu sua senha? <a href="views/alterarSenha.php">Clique aqui para redefinir</a></h4>
        </div>
    </div>
</body>

</html>
