<!DOCTYPE html>
<html>
<head>
    <title>Login en PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <style>
        body {
            background-color: #1D5B9B;
            padding-top: 100px;
            align:center;
        }

        .container {
            max-width: 400px;
            background-color: #00FFFF;
            padding: 20px;
            border-radius: 5px;
        }

        .container h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .btn-login {
            width: 100%;
        }

        .btn-action {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Login</h2>

        <form action="/login/processLogin" method="post">
            <div class="form-group">
                <label for="inputUsuario">Usuario</label>
                <input type="text" class="form-control" id="inputUsuario" name="usuario" placeholder="Usuario" required>
            </div>

            <div class="form-group">
                <label for="inputPassword">Contraseña</label>
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Contraseña" required>
            </div>

            <button type="submit" class="btn btn-primary btn-login">Entrar</button>
        </form>

        <div class="text-center">
            <a href="http://localhost/ecommerce/home" class="btn btn-primary btn-action">Home</a>
            <a href="http://localhost/ecommerce/cliente" class="btn btn-primary btn-action">Registrar</a>
        </div>
    </div>

</body>
</html>
