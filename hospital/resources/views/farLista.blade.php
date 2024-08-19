<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Medicamentos</title>
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
            background-image: url('{{ asset('img/hospital12.jpg') }}');
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
            height: 265px;
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
            margin-bottom: 10px;
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
            max-width: 680px;
            height: 450px;
            background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgba(0, 41, 255, 0.00) 100%), rgb(0, 47, 255);
            padding: 20px;
            border-radius: 15px;
            border: 3px solid #000000;
            text-align: center;
            color: #000000;
            overflow-y: auto;
            padding-bottom: 20px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        table, th, td {
            border: 3px solid #000000;
            text-align: center;
        }

        th, td {
            padding: 3px;
            text-align: center;
        }

        th {
            background-color: #ffffff;
            text-align: center;
        }

    </style>
</head>
<body>
    
    <div class="fondo"></div>

    <div class="contenedor">

        <div class="encabezado">
            <img src="{{ asset('img/medic.jpeg') }}" alt="icono" class="icono">
            <h3>Lista Medicamentos</h3>
        </div>

        <div class="formulario">
            <img src="{{ asset('img/medic.jpeg') }}" alt="imagen" class="imagen">
            <!-- Tabla para mostrar registros -->
            <table>
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Cantidad</th>
                        <th>Fecha Caducidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medicamentos as $medicamento)
                        <tr>
                            <td>{{ $medicamento->idmedicamento }}</td>
                            <td>{{ $medicamento->nombre }}</td>
                            <td>{{ $medicamento->descripcion }}</td>
                            <td>{{ $medicamento->cantidad }}</td>
                            <td>{{ $medicamento->fechacaducidad }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table> 
        </div>

        <button class="boton" onclick="window.location.href='{{route('farmacia')}}'">Retroceder</button>

    </div>

    <script>

    </script>
</body>
</html>