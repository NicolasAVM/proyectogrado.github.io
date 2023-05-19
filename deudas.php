<?php include('src/seguridad.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/mediaMenu.css">
    <link rel="icon" href="https://drive.google.com/uc?export=download&id=1T_Ij0N4tRasv2BlktHlVrzc1iUKx2vIX">
    <title>Menú SafeWallet</title>
</head>
<body>
  <nav>
    <ul>
        <li>
            <a href="./menu.html" class="logo">
                <img src="https://drive.google.com/uc?export=download&id=1T_Ij0N4tRasv2BlktHlVrzc1iUKx2vIX" alt="Logo">
                <span class="nav-item">SafeWallet</span>
            </a>
        </li>
        <li><a href="./Perfil.html">
            <i class="fas fa-user"></i>
            <span class="nav-item">Perfil</span>
        </a></li>
        <li><a href="./Tips.html">
            <i class="fas fa-lightbulb"></i>
            <span class="nav-item">Tips</span>
        </a></li>
        <li><a href="./Settings.html">
            <i class="fas fa-cog"></i>
            <span class="nav-item">Configuración</span>
        </a></li>
        <li><a href="./deudas.php">
            <i class="fas fa-money-check"></i>
            <span class="nav-item">Manejo de deudas</span>
        </a></li>
        <li><a href="./menu.php">
            <i class="fas fa-graduation-cap"></i>
            <span class="nav-item">Manejo de Proyectos</span>
        </a></li>
        <li>
            <a href="./index.html" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Log out</span>
            </a>
        </li>
    </ul>
</nav>
<main>
<div class="row cabeza">
            <p>Manejo de deudas</p>
            <button type="button" class="btn btn-primary" id="crear" style= "margin-bottom: 20px;">Agregar Deuda</button>
    </div>
    <section class="main_section_table">
        <table class="table" id="listar">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Valor del prestamo</th>
                    <th>Tiempo de duracion</th>
                    <th>Interes</th>
                    <th>Deuda actual</th>
                    <th>estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
         
    </section>
    
</main>
<?php include_once('modal/deudas.php')?>
<script src="js/deudas.js" type="text/javascript"></script>
<!-- CDN JQUEY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- CDN POPER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- CDN bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
<!-- CDN sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>