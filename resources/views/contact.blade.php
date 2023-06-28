<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="contactbody">
    
    <h1>Contáctanos</h1>
    
    <main class="contactContainer">
        <p class="titleRegister">formulario de registro</p>
        <section class="register">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <input class="boxRegister" placeholder="Nombre" type="text" name="nombre">
                <input class="boxRegister" placeholder="Correo" type="email" name="correo">
                <input class="boxRegister" placeholder="Telefono" type="number" name="telefono">
                <input class="boxRegister" placeholder="Empresa" type="text" name="empresa">
                <input class="boxRegister" placeholder="Dirección" type="text" name="direccion">
                <input class="boxRegister" placeholder="NIT" type="number" name="nit">
                <textarea class="boxRegister" placeholder="Mensaje" name="mensaje" id="msn" cols="20" rows="10"></textarea>
                <p> Acepta política de tratamiento de datos</p>
                <a href="#">Terminos y condiciones</a>
                <input class="boxRegister" type="checkbox">
                <button class="buttonRegister" type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer id="contact" class="footerContainer">
        <div class="footerContent">
            <div class="socialMedia">
                <a href="./"class="socialMediaIcon"><i class='bx bxl-facebook'></i></a>
                <a href="./"class="socialMediaIcon"><i class='bx bxl-twitter'></i></a>
                <a href="./"class="socialMediaIcon"><i class='bx bxl-linkedin-square'></i></a>
            </div>
            <div class="contactUs">
                <h2 class="brand">Dirección Calle 20 sur 25 48 Restrepo Bogotá<br> 
                Teléfono +57 300 192 42 40<br>©Fredy Ramirez </h2>
            </div>
        </div>
    
        <div class="line"></div>
    </footer>
</body>
</html>

