<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .cont {
        width: 300px;
        margin: auto;
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    form {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh;
    }
</style>

<body>
    <div class="cont">
        <form method="post">
            <h1>Login</h1>
            <input type="text" placeholder="Username" name="user">
            <input type="text" placeholder="Senha" name="senha">
            <input type="submit" value="Login">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $user = $_POST['user'];
        $senha = $_POST['senha'];


        if (!empty($user) && !empty($senha)) {

            $valid_username = "adm";
            $valid_password = "12345";


            if ($user === $valid_username && $senha === $valid_password) {
                echo "<script>alert('Login successful. Welcome, $Usuario!');</script>";
            } else {
                echo "<script>alert('Usuário ou senha incorretos.');</script>";
            }
        } else {
            echo "<script>alert('Por favor, preencha todos os campos.');</script>";
        }
    }
    ?>
</body>

</html>
