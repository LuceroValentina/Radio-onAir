<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio-Cronograma</title>
    <link rel="stylesheet" href="{{asset('css/dashboard_radio.css')}}">

</head>

<body>
    <div class="contenedor">
        <h1 class="titulo">Cronograma del día</h1>

        <div class="boton_abrir">
            <button id="abrir_menu" onclick="abrir_menu()">
                <img src="imagenes/flecha_menu.svg" alt="">
            </button>
        </div>

        <div class="container_menu" id="container_menu">
            <img src="{{ Auth::user()->profile_image
    ? asset('storage/' . Auth::user()->profile_image)
    : asset('imagenes/default_user.png') }}" alt="Foto de perfil" width="120">
            PASARLE LAS IMAGENES DE ICONOS Y AGREGAR ESTA NUEVA
            <div class="container-items">
                <ul>
                    <li>
                        <img src="imagenes/icono_ausencia1.svg" alt="" class="iconos">
                        <a href="#">Ausencias</a>
                    </li>
                    <li>
                        <img src="imagenes/icono_buzon.svg" alt="" class="iconos">
                        <a href="#">Buzones</a>
                    </li>
                    <li>
                        <img src="imagenes/icono_equipos.svg" alt="" class="iconos">
                        <a href="#">Equipos</a>
                    </li>
                </ul>
            </div>
            <button id="cerrar_menu" onclick="cerrar_menu()">
                <img src="imagenes/flecha_cerrarmenu.svg" alt="">
            </button>
        </div>

        <script src="{{ asset('js/radio.js') }}"></script>
    </div>

</body>

</html>