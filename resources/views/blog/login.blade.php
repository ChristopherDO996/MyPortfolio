<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Document</title>
</head>

<body>
    <video src="{{ asset('img/login.mp4') }}" autoplay muted loop playsinline></video>
    <div class="login-box">
        <h2>Acceso Admin</h2>
        <form>
            <div class="user-box">
                <input type="text" name="" required="">
                <label>Usuario</label>
            </div>
            <div class="user-box">
                <input type="password" name="" required="">
                <label>Contraseña</label>
            </div>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Entrar
            </a>
        </form>
    </div>
</body>

</html>
