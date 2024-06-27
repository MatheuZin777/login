<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post">
    <h1>Login</h1>
    User: <input  type="text"  placeholder="Username" name="user">
    Password: <input  type="text"  placeholder="Senha"  name="senha">
    <input type="submit" value="Login" >
    </form>

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
$user = $_POST['user'];
$user = $_POST['senha'];

if($user === 'adm' && $senha === '123'){
    echo "entrou";
}else{
    echo "bb";
}
}
?>
</body>
</html>