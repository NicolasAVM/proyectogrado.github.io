<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&family=Quicksand:wght@400;500&family=Roboto+Slab:wght@100;600&family=Tilt+Warp&display=swap" rel="stylesheet">
    <link rel="icon" href="./imagenes/Logo.png">
    <link rel="stylesheet" href="css/Registrarse.css">
    <title>Registrar usuario</title>
</head>
<body>
    <header>
        <nav class="header_navbar"> <!-- navbar -->
            <section class="header_nav_section_one">
                <img class="header_nav_image" src="./imagenes/Logo.png" alt="Logotipo">
                <h1 class="header_nav_title"><a href="index.html">SafeWallet</a></h1>
            </section>
                <ul class="header_nav_ul">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="Preguntas.html">Preguntas Frecuentes</a></li>
                    <li><a href="Nosotros.html">Nosotros</a></li>
                </ul>
            <section class="header_nav_section_two">
                <a class="header_nav_iniciarSes" href="./iniciarSesion.html">Iniciar Sesión</a>
                <a class="btn" href="./Registrarse.html">Registrarse</a>
            </section>
        </nav>
    </header>
    <main>
        <section class="main_section">
            <div class="main_section_div_container">
                <p class="main_section_container_p">Registrate!</p>
                <form id="registro" action="form">
                    <div class="main_section_div_form">
                        <input type="email" id="email" class="input" name="user_email" placeholder="Email" size="40" required>
                    </div>
                    <div>
                        <input type="text" id="name" class="input" name="user_name" placeholder="User name" size="40" required>
                    </div>
                    <div class="main_section_div_form">
                        <input type="password" id="password" class="input" name="user_password" placeholder="*************">
                    </div>
                    <div class="main_section_div_form_submit">
                        <button class="btn_main" type="submit">Start Trial</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="js/Registrarse.js" type="text/javascript"></script>
</body>
</html>