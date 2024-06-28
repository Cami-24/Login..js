<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form id="loginForm" class="form" action="php/registro_usuario.php" method="post">
            <h1 class="title">Login</h1>
            <label>
                <p>Username</p>
                <input placeholder="Username" type="text" id="loginUsername" name='username' required>
            </label>
            <label>
                <p>Password</p>
                <input placeholder="Password" type="password" id="loginPassword" name='password' required>
            </label>
            <a href="#" class="link">¿Olvidaste la contraseña?</a>
            <button type="submit" name="send">Login</button>
        </form>
    </div>
    <script src="js/main.js"></script>
</body>
</html>

