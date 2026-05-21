<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "root";
$db = "sistema_simple";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connet_error){
    die("erro na conexão");
}else{
    echo "<p> Banco: ok</p>";
};

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>link com o banco</title>
</head>
<body>

    <h2>Login com php</h2>

    <form action="" method="post">
        
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="">

        <br><br>

        <label for="senha">Senha</label>
        <input type="text" name="senha" id="">

        <br><br>

        <button type="subimit">Entrar</button>
    </form>
    
</body>
</html>