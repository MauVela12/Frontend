<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.jpg') }}" type="image/x-icon">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            background-image: url('{{ asset('img/fondo.jpeg') }}');
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            border-left: 10px #000;
        }

        .fondo {
            width: 50%;
            height: 100vh;
            background-image: url('{{ asset('img/hospital2.jpg') }}');
            background-size: cover;
            background-position: left center;
        }

        .contenedor {
            width: 70%;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            /* background-image: url('img/fondo.jpeg'); */
        }

        .tabla {
            max-width: 200px;
            height: 270px;
            background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgba(0, 41, 255, 0.00) 100%), rgb(0, 47, 255);
            padding: 20px;
            border-radius: 15px;
            border: 3px solid #000000;
            text-align: center;
            color: #000000;
            width: 50%; 
            box-sizing: border-box;
            margin: 10px;
            font-size: 13px;
        }
        .tabla:hover{
            box-shadow: 0 0px 50px rgb(0, 47, 255);
        }

        .icono {
            width: 100px;
            height: 100px;
            padding: auto;
            border-radius: 20px;
            border: 3px solid #000000;
        }

        .imagen {
            width: 150px;
            height: 150px;
            padding: auto;
            border-radius: 20px;
            border: 3px solid #000000;
            margin-bottom: 15px;
        }

        .boton {
            width: 200px;
            height: 40px;
            padding: 0px;
            margin-top: 10px;
            background-color: rgb(0, 47, 255);
            color: #fff;
            font-size: 16px;
            border-radius: 6px;
            border: 2px solid #000000;
            cursor: pointer;

            position: fixed;
            bottom: 10px; 
            left: 10px; 
            padding: 10px 20px;
            z-index: 1000;
        }
        .boton:hover{
            background-color: rgb(0, 23, 126);
        }

        .encabezado {
            position: fixed;
            top: 0;
            left: 0;
            padding: 10px;
            color: white;
            z-index: 1000; 
            font-size: 18px;

            width: 350px;
            height: 110px;

            border-radius: 0px 0px 100px 0px;
            border-bottom: 8px solid #000000;
            background: linear-gradient(0deg, rgb(0, 47, 255) 0%, rgba(0, 41, 255, 0.00) 100%), rgb(120, 145, 255);

            display: flex;
            align-items: center;
            gap: 15px; 
        }

        .formulario {
            width: 100%;
            max-width: 300px;
            height: 450px;
            background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgba(0, 41, 255, 0.00) 100%), rgb(0, 47, 255);
            padding: 20px;
            border-radius: 15px;
            border: 3px solid #000000;
            text-align: center;
            color: #000000;
            font-size: 20px;
        }

        .caja{
            width: 100%;
            max-width: 300px;
            height: 25px;
            margin-bottom: 5px;
            text-align: center;
            color: rgb(0, 47, 255);
            border-radius: 6px;
            border: 2px solid #000000;
            font-size: 15px;
        }

        .bot {
            width: 100%;
            max-width: 300px;
            height: 30px;
            margin-top: 15px;
            text-align: center;
            font-size: 15px;
            background-color: rgb(0, 47, 255);
            color: #fff;
            border-radius: 6px;
            border: 2px solid #000000;
        }
        .bot:hover{
            background-color: rgb(0, 23, 126);
        }

    </style>
</head>
<body>
    
    <div class="fondo"></div>

    <div class="contenedor">

        <div class="encabezado">
            <img src="{{ asset('img/admin.jpeg') }}" alt="icono" class="icono">
            <h3>Agregar Usuario</h3>
        </div>

        <div class="formulario">
            <img src="{{ asset('img/admin.jpeg') }}" alt="imagen" class="imagen">
            <div class="form-container">
                <form action="{{ route('usuario.salvar') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input class="caja" type="text" id="name" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input class="caja" type="text" id="correo" name="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input class="caja" type="text" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo:</label>
                        <select class="caja" id="tipo" name="tipo" required>
                            <option value="administrador">Administrador</option>
                            <option value="empleado">Empleado</option>
                        </select>
                    </div>
                    <button class="bot" type="submit">Guardar</button>
                </form>
            </div>
            
        </div>


        <button class="boton" onclick="window.location.href='{{route('administradores')}}'">Retroceder</button>

    </div>

    <script>

    </script>
</body>
</html>