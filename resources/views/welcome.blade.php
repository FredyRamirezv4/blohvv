<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog Fredy Ramirez</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;500;700&display=swap" rel="stylesheet">
</head>

<body>

<!-- Header -->
<header class="header" id="HojaDeVida">
    <img src="{{ asset('icons/bx-menu.svg') }}" alt="menu" class="bx-menu">
    <div class="headContainer">
        <h1 class="titulo">Fredy Ramirez</h1>
        <p>Hoja de vida</p>
    </div>

    <!-- Nav -->
    <nav class="menuNavegacion">
        <ul class="letterMenu">
            <li><a class="letterMenu" href="#HojaDeVida">Hoja de vida</a></li>
            <li><a class="letterMenu" href="#Servicios">Servicios</a></li>
            <li><a class="letterMenu" href="{{ route('contact.store') }}">Contacto</a></li>
            <li><a class="letterMenu" href="#Proyectos">Proyectos</a></li>
            <a class="letterMenu" href="https://google.com/">Búsqueda</a>
        </ul>   
    </nav>
</header>

<!-- Main -->
<main>
    <article class="articleContainer" id="service">
        <header class="headerContainer"></header>
    </article>
    <div class="profile">
        <p>Tecnólogo en gestión bibliotecaria del Servicio Nacional de Aprendizaje. Mi experiencia laboral incluye trabajar en la Secretaría de Salud de Bogotá, donde adquirí conocimientos y habilidades en el manejo de documentación y procesos administrativos específicos del sector de la salud, he desempeñado labores en el repositorio institucional (SENA) y brinde apoyo a los servicios de la biblioteca del Centro de Gestión Administrativa Regional Bogotá.<br>
            Además de mi experiencia en bibliotecas, poseo conocimientos en revistas científicas y estoy familiarizado con los estándares y procesos de indexación de artículos (OJS). Tengo experiencia en la búsqueda, selección y organización de artículos científicos relevantes para apoyar la investigación y la toma de decisiones en entornos académicos y profesionales.<br>
            En términos de programación web, cuento con habilidades en PHP, HTML, JavaScript, CSS y Bases de Datos.<br>
            Además de mis conocimientos técnicos, soy una persona responsable y organizada. Poseo habilidades de comunicación y de trabajo en equipo, lo que me permite colaborar de manera efectiva con colegas, clientes y usuarios.
        </p>
    </div>
    <div class="imgbox">
        <img src="{{ asset('img/library.jpg') }}" alt="imgService" class="imgService">
    </div>

    <div class="checklistservice"></div>
    <h2 id="Servicios" class="subtitle">Servicios</h2>
    <div class="service">
        <h3 class="numberService"><span class="number">1</span> Desarrollo Web</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat suscipit, odio facilis placeat quos vero enim consequatur reiciendis molestias at eligendi deserunt cum doloremque ut ratione repellat obcaecati accusamus soluta!</p>
    </div>
    <div class="service">
        <h3 class="numberService"><span class="number">2</span> Bases de datos</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat suscipit, odio facilis placeat quos vero enim consequatur reiciendis molestias at eligendi deserunt cum doloremque ut ratione repellat obcaecati accusamus soluta!</p>
    </div>
    <div class="service">
        <h3 class="numberService"><span class="number">3</span> Arquitectura Web</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat suscipit, odio facilis placeat quos vero enim consequatur reiciendis molestias at eligendi deserunt cum doloremque ut ratione repellat obcaecati accusamus soluta!</p>
    </div>
    <div class="service">
        <h3 class="numberService"><span class="number">4</span> Asesoramiento en investigación</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat suscipit, odio facilis placeat quos vero enim consequatur reiciendis molestias at eligendi deserunt cum doloremque ut ratione repellat obcaecati accusamus soluta!</p>
    </div>
    <div class="service">
        <h3 class="numberService"><span class="number">5</span> Catalogación, clasificación e indexación</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat suscipit, odio facilis placeat quos vero enim consequatur reiciendis molestias at eligendi deserunt cum doloremque ut ratione repellat obcaecati accusamus soluta!</p>
    </div>
    <div class="service">
        <h3 class="numberService"><span class="number">6</span> Preservación y restauración</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat suscipit, odio facilis placeat quos vero enim consequatur reiciendis molestias at eligendi deserunt cum doloremque ut ratione repellat obcaecati accusamus soluta!</p>
    </div>

    <article class="gallery" id="portafolio">
        <div class="container">
            <h2 id="Proyectos" class="subtitle">Proyectos</h2>
            <div class="galleryContainer"></div>

            <img src="{{ asset('img/codeBeer.jpg') }}" alt="beer" class="imgGallery">
            <img src="{{ asset('img/hardDisk.jpg') }}" alt="hardDisk" class="imgGallery">
            <video src="{{ asset('img/perfilV.mp4') }}" controls class="videoGallery"></video>
        </div>
    </article>
    <!-- Contenedor imagen  -->
    <section class="imagenLigth">
        <img src="{{ asset('icons/bx-x.svg') }}" alt="x" class="close">
        <img src="{{ asset('img/codeView.jpg') }}" alt="" class="imagenAdd">
    </section>

    <article class="containerHabilidades" id="expert">
        <h2 class="subtitle">Habilidades en:</h2>
        <section class="experts">
            <div class="containerExpert">
                <img src="{{ asset('img/disenador.png') }}" alt="desing">
                <h3 class="numberExpert">Arquitectura Web</h3>
            </div>
            <div class="containerExpert">
                <img src="{{ asset('img/editarCodigoIso.png') }}" alt="edit">
                <h3 class="numberExpert">Desarrollo de aplicaciones web</h3>
            </div>
            <div class="containerExpert">
                <img src="{{ asset('img/servidorNubeIso.png') }}" alt="cloud">
                <h3 class="numberExpert">Servicios en la nube</h3>
            </div>
            <div class="containerExpert">
                <img src="{{ asset('img/arquitectura.png') }}" alt="cloud">
                <h3 class="numberExpert">Bases de datos</h3>
            </div>
            <div class="containerExpert">
                <img src="{{ asset('img/biblioteca.png') }}" alt="cloud">
                <h3 class="numberExpert">Catalogación bibliográfica</h3>
            </div>
            <div class="containerExpert">
                <img src="{{ asset('img/asesoramiento.png') }}" alt="cloud">
                <h3 class="numberExpert">Asesoramiento en investigación</h3>
            </div>
        </section>
    </article>
</main>

<footer id="contact" class="footerContainer">
    <div class="footerContent">
        <div class="socialMedia">
            <a href="./" class="socialMediaIcon"><i class='bx bxl-facebook'></i> </a>
            <a href="./" class="socialMediaIcon"><i class='bx bxl-twitter'></i> </a>
            <a href="./" class="socialMediaIcon"><i class='bx bxl-linkedin-square'></i> </a>
        </div>
        <div class="contactUs">
            <h2 class="brand">Dirección Calle 20 sur 25 48 Restrepo Bogotá<br>
                Teléfono +57 300 192 42 40<br>©Fredy Ramirez </h2>
        </div>
    </div>
    <div class="line"></div>
</footer>

<!-- Carga de script -->

<script src="/js/main.js"></script>
<script src="/js/imgBox.js"></script>

<a class="credits" href="https://www.flaticon.es/iconos-gratis/desarrollo-de-software"
    title="desarrollo de software iconos">Iconos creados por kerismaker</a>
</body>

</html>

