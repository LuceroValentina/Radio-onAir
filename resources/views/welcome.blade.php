<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio onAir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    <script src='https://sleekflow.io/whatsapp-button.js' async onLoad="whatsappButton({
    buttonName:'Radio onAir',
    buttonIconSize: '22',
    brandImageUrl:'https://sleekflow.io/static/images/sleekflow-icon.png',
    brandName:'onAir',
    brandSubtitleText:'onAir',
    buttonSize:'medium',
    buttonPosition:'left',
    callToAction:'Iniciar chat',
    phoneNumber:'542995678241',
    welcomeMessage:'Hola 👋',
    prefillMessage:'¡Hola, quiero saber más!',
    })">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg  py-3 shadow-sm fixed-top" style="font-size: 1.1rem;">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">OnAir
               <!-- <img src="{{ asset('images/logo.svg') }}" class="logo" alt="">-->
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-welcome">
        <img src=" {{ asset('images/intento.png') }}" alt="fondo" class="imagen-inicio">
        <div class="container-musica">
            <img src="{{ asset('images/portadaalbum.webp') }}" alt="" class="portada-album">
            <div class="container-info-musica">
                <h2>Hola - Miranda!</h2>
                <p>El Templo del Pop</p>
                <audio src="{{ asset('images/Hola.mp3') }}" controls></audio>
            </div>

        </div>

    </div>

    <div class="container-iconos">
        <a href="https://www.instagram.com/" target="_blank" class="img15">
            <img src="images/icono_instagram.png" alt="" class="imginsta">
        </a>
        <a href="https://www.facebook.com/" class="img2">
            <img src="{{ asset('images/icono_facebook.png')}}" alt="" class="imgface">
        </a>
        <a href="https://x.com/?lang=es" class="img3">
            <img src="{{ asset('images/icono_x.png')}}" alt="" class="imgx">
        </a>
        <a href="https://www.youtube.com/" class="img4">
            <img src="{{ asset('images/icono_you.png')}}" alt="" class="imgy">
        </a>
        <a href="https://www.maps.google.com" class="img5">
            <img src="{{ asset('images/icono_ubicacion.png')}}" alt="" class="imgu">
        </a>
    </div>
    <div class="contenedor-carrousel">
        <div class="images" id="slider">
            <section class="slider_section">
                <img src="{{ asset('images/movil.png') }}" alt="Logo">
                <div class="over">
                    <h1>Móvil</h1>
                    <p>El equipo del móvil de noticias mantiene a nuestro pueblo informado.
                        Siempre atentos, capturan cada suceso en las calles,
                        asegurando información veraz y oportuna para la comunidad.</p>
                </div>
            </section>
            <section class="slider_section">
                <img src="{{ asset('images/radio.png') }}" alt="Logo">
                <div class="over">
                    <h1>Radio</h1>
                    <p>Los locutores son la voz de nuestros programas.
                        Acercan información, música y entretenimiento,
                        creando un vínculo cercano con la audiencia.
                    </p>
                </div>
            </section>
            <section class="slider_section">
                <img src="{{ asset('images/tecnicos.png') }}" alt="Logo">
                <div class="over">
                    <h1>Técnicos</h1>
                    Nuestros técnicos son fundamentales en radio y televisión.
                    Garantizan sonido e imagen de calidad,
                    permitiendo que la información y el entretenimiento
                    lleguen claros y confiables a nuestro pueblo.
                </div>
            </section>
            <section class="slider_section">
                <img src="{{ asset('images/television.png') }}" alt="Logo">
                <div class="over">
                    <h1>Televisión</h1>
                    <p>Quienes hablan frente a la cámara comunican noticias e historias importantes.
                        Con claridad y profesionalismo, acercan la información
                        y fortalecen el vínculo entre los medios y la comunidad.</p>
                </div>
            </section>
        </div>
        <div class="boton_izq">
            <img src="{{ asset('images/flecha_menu_izq.png') }}" alt="Logo">
        </div>
        <div class="boton_der">
            <img src="{{ asset('images/flecha_menu_der.png') }}" alt="Logo">
        </div>
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
    <div class="nuestra-hist">
        <div class="texto-nosotros">
            <h1>Nuestra Historia</h1>
            <p>Corría el año 2020, cuando un pequeño grupo de apasionadas por la comunicación decidió darle voz a una
                idea:
                crear una radio que fuera más que un medio, que fuera un puente entre las personas, una compañía diaria.
                Al principio, eran pocas las horas de transmisión, el equipo era modesto y la señal no llegaba muy
                lejos. Pero
                había algo que sí era enorme: las ganas. Día a día, con esfuerzo, dedicación, y la ayuda de ustedes
                fuimos
                creciendo. Se sumaron voces, programas, historias y nuestro canal de televisión. Nos abrimos paso entre
                las
                interferencias y llegamos a los hogares, a los comercios, a los autos, a los oídos atentos de una
                comunidad que
                nos adoptó como propios.
                Con el tiempo, nos adaptamos a los nuevos formatos, a las redes sociales, al streaming. Cambiaron las
                tecnologías, pero no cambió lo esencial: seguimos creyendo en el poder de la palabra, en la cercanía que
                solo la
                radio puede dar.
                Hoy, después de tantos años al aire, miramos hacia atrás con orgullo y hacia adelante con compromiso.
                Esta es
                nuestra historia, pero también es la tuya. Porque cada mensaje, cada llamado, cada escucha, nos hace
                parte de
                una misma sintonía. Gracias por ser parte.</p>
        </div>
    </div>
    </div>
</body>

</html>