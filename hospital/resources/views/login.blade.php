<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            background-image: url('img/fondo2.jpeg');
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            border-left: 10px #000;
        }

        .fondo {
            width: 50%;
            height: 100vh;
            background-image: url('img/hospital3.jpg');
            background-size: cover;
            background-position: left center;
        }

        .contenedor {
            width: 50%;
            padding: 50px;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            /* background-image: url('img/fondo2.jpeg'); */
        }

        .login {
            width: 100%;
            max-width: 300px;
            height: 450px;
            background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgba(0, 41, 255, 0.00) 100%), rgb(0, 47, 255);
            padding: 20px;
            border-radius: 15px;
            border: 3px solid #000000;
            text-align: center;
            color: #000000;
        }
        .login:hover{
            box-shadow: 0 0px 100px rgb(0, 47, 255);
        }

        .ingresar {
            width: 290px;
            height: 30px;
            padding: 5px;
            margin: 10px 0;
            border-radius: 6px;
            border: 2px solid rgb(0, 0, 0);
            color: rgb(0, 47, 255);
            text-align: center;
            background-color: rgb(239, 242, 255);
            cursor: pointer;
        }
        .ingresar:hover{
            background-color: rgb(255, 255, 255);
            border: 2px solid rgb(0, 47, 255);
        }

        .boton {
            width: 290px;
            height: 40px;
            padding: 0px;
            margin-top: 10px;
            background-color: rgb(0, 47, 255);
            color: #fff;
            font-size: 16px;
            border-radius: 6px;
            border: 2px solid #000000;
            cursor: pointer;
        }
        .boton:hover{
            background-color: rgb(0, 23, 126);
        }

        .icono {
            width: 200px;
            padding: auto;
            border-radius: 20px;
            border: 3px solid #000000;
        }

        .alert {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;

            position: fixed;
            top: 0;
            left: 50%;
            padding: 10px;
            z-index: 1000;
        }

        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }


    </style>
</head>
<body>
    <div class="fondo"></div>

    <div class="contenedor">
        <form class="login" action="{{ route('login.inicio') }}" method="POST">
            @csrf
    
            <!-- Mostrar mensajes de error -->
            @if ($errors->has('error'))
                <div class="alert alert-danger">
                    {{ $errors->first('error') }}
                </div>
            @endif
    
            <img src="img/logo.jpg" alt="icono" class="icono">
            <h2>INGRESAR</h2>
            <input class="ingresar" type="email" name="correo" id="email" placeholder="Correo" required>
            <input class="ingresar" type="password" id="password" name="password" placeholder="Contraseña" required>
            <button class="boton" type="submit">Iniciar sesión</button>
        </form>
    </div>
    
    </script>
</body>
</html>