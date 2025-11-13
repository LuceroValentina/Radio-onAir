<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seccion Administrador</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
    <div class="container">
        <h1>Cronograma del día</h1>
        <div class="menu-lateral">
            <button class="boton-abrir" id="boton-abrir">
                <img src="{{ asset('imagenes/flecha_menuabrir.png') }}" alt="Abrir menú">
            </button>

            <div class="container-menu" id="menu">
                <div class="container-items">
                    <h2>¡Hola Nombre!</h2>
                    <img src="{{ asset('imagenes/flecha_menuabrir.png') }}" alt="Foto de perfil de usuario">
                    <ul>
                        <li class="lista"><a href="{{ route('equipos.index') }}" class="item">Administrar equipos</a></li>
                        <li class="lista"><a href="#" class="item">Administrar cargos</a></li>
                        <li class="lista"><a href="{{ url('/crear_nota') }}" class="item">Administrar ausencias</a></li>
                        <li class="lista"><a href="{{ url('/registro_firmas') }}" class="item">Administrar usuarios</a>
                        </li>
                        <li class="lista"><a href="#" class="item">Administrar categoría</a></li>
                        <li class="lista"><a href="#" class="item">Administrar buzones</a></li>
                        <li class="lista"><a href="{{ route('cronograma.index') }}" class="item">Administrar cronogramas</a></li>

                        <li class="container-submenu">
                            Resumen Cuatrimestre
                            <ul class="submenu">
                                <li class="lista-submenu"><a href="#" class="item">1er Cuatrimestre</a></li>
                                <li class="lista-submenu"><a href="#" class="item">2do Cuatrimestre</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>

                <button class="boton-cerrar" id="boton-cerrar">
                    <img src="{{ asset('imagenes/flecha_menucerrar.png') }}" alt="Cerrar menú">
                </button>
            </div>

            <script>
                const botonAbrir = document.getElementById('boton-abrir');
                const botonCerrar = document.getElementById('boton-cerrar');
                const menu = document.getElementById('menu');

                botonAbrir.addEventListener('click', () => {
                    menu.classList.toggle('activo');
                });

                botonCerrar.addEventListener('click', () => {
                    menu.classList.remove('activo');
                });
            </script>

        </div>
    </div>
</body>

</html>