<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/login.css">
    <title>Administrativo</title>
</head>
<body>
    <div class="card">
        <h2>Login</h2>
        <p>Digite seu email e senha para entrar</p>
        <form action="?c=u&a=vl" method="POST">
            <div class="input-text">
                <input type="text" placeholder="Usuário" name="login" id="login">
            </div>
            <div class="input-text">
                <input type="password" placeholder="Senha" name="password" id="password">
            </div>
            <button class="btn" type="submit">Entrar</button>
        </form>       
    </div>
</body>
</html>