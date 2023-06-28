<?php 
session_start();
$erro = $_SESSION['erro'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <form action="login.php" method="POST">
    <?php 
    if($erro){
    ?>

    <strong> Login ou senha incorreta</strong>
    <br /><br />
    <?php }?>
        Login: <input type="text" name="login" />
        <br/><br />
        Senha: <input type="password" name="senha" />
        <br/><br />
        <input type="submit" value="Enviar" />

    </form>
    
</body>
</html>