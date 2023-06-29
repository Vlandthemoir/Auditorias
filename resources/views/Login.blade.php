<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/Login.css')}}">
        <script src="https://kit.fontawesome.com/f67351aa49.js" crossorigin="anonymous"></script>
        <title>Inicio de sesión</title>
    </head>
    <body>
        <div class="general-container">
            <div class="form">
                <form class="" action="/" method="POST">
                    @csrf
                    <div class="icon">
                        <img src="{{ asset('logo.jpg') }}" alt="">
                    </div>
                    <!--<label for=""><i class="fa-solid fa-d"></i> <i class="fa-solid fa-i"></i> <i class="fa-solid fa-p"></i> <i class="fa-solid fa-r"></i> <i class="fa-solid fa-i"></i> <i class="fa-solid fa-s"></i></label>-->
                    <label for=""><b>DIPRIS</b></label>
                    <input type="email" name="correo_electronico" placeholder="Correo">
                    <input type="password" name="contraseña" placeholder="Contraseña">
                    <button type="submit" name="button"><b>Iniciar Sesion</b></button>
                </form>
            </div>
        </div>
    </body>
</html>