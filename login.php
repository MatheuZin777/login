<!DOCTYPE html>
<html lang="en">

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
    body {
        background-color: gray !important;;
    }

    .cont {
        width: 300px;
        margin: auto;
        padding: 20px;
        height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        font-family: Arial, sans-serif;
        color: #333;
        font-size: 18px;
    }

    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        height: 200px;
    }

    form input {
        width: 100%;
        padding: 7px;
        margin-bottom: 10px;
        letter-spacing: 0.5px;
    }

    #btn{
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top: 10px;
        width: 100%;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s ease;
    }
    #btn:hover {
        background-color: #439146;
    }
</style>

<body>
    <div class="cont">
        <form method="post">
            <h1>Login</h1>
            <input type="text" placeholder="Username" name="user">
            <input type="text" placeholder="Senha" name="senha">
            <input id="btn" type="submit" value="Login">
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
