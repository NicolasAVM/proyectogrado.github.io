<?php include('src/seguridad.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav slimscrollsidebar">
    <div class="sidebar-head">
      <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navegación</span></h3>
    </div>
    <div class="user-profile">
      <div class="dropdown user-pro-body">
        <div><img src="../plugins/logos/admin-user.png" alt="user-img" class="img-circle"></div>
        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="text-transform: uppercase;"><?php echo $_SESSION['nombre'] . ' ' . $_SESSION['apellidos']; ?><span class="caret"></span></a>
        <ul class="dropdown-menu animated flipInY">
          <li><a href="salir.php"><i class="fa fa-power-off"></i> Cerrar Sesión</a></li>
        </ul>
      </div>
    </div>
    <ul class="nav" id="side-menu">

      <li class="devider"></li>

      <!-- <li> <a href="#" class="waves-effect "><i class="mdi mdi-format-list-bulleted fa-fw"></i> <span class="hide-menu">Encuesta<span class="fa arrow"></span></span></a>
        <ul class="nav nav-second-level collapse">

          <li>
            <a href="index.php">
              <i class="mdi mdi-home-variant fa-fw"></i>
              <span class="hide-menu">Inicio</span>
            </a>
          </li>

          <li>
            <a href="cursos.php">
              <i class="mdi mdi-monitor fa-fw"></i>
              <span class="hide-menu">Cursos</span>
            </a>
          </li>

          <li>
            <a href="administrador.php">
              <i class="mdi mdi-account-switch fa-fw"></i>
              <span class="hide-menu">Administradores</span>
            </a>
          </li>

          <li>
            <a href="encuestados.php">
              <i class="mdi mdi-file-document-box fa-fw"></i>
              <span class="hide-menu">Encuestados</span>
            </a>
          </li>
        </ul>
      </li> -->

      <li> <a href="#" class="waves-effect "><i class="mdi mdi-format-list-bulleted fa-fw"></i> <span class="hide-menu">Evaluaciones<span class="fa arrow"></span></span></a>
        <ul class="nav nav-second-level collapse">
          <li>
            <a href="categorias.php">
              <i class="fa-fw">C</i>
              <span class="hide-menu">Categorias</span>
            </a>
          </li>
          <li>
            <a href="perfil.php">
              <i class="fa-fw">P</i>
              <span class="hide-menu">Perfiles</span>
            </a>
          </li>
          <li>
            <a href="ev-usuarios.php">
              <i class="fa-fw">U</i>
              <span class="hide-menu">Usuarios</span>
            </a>
          </li>
          <li>
            <a href="ev-preguntas.php">
              <i class="fa-fw">P</i>
              <span class="hide-menu">Preguntas</span>
            </a>
          </li>
        </ul>
      </li>

      <li> <a href="#" class="waves-effect "><i class="mdi mdi-format-list-bulleted fa-fw"></i> <span class="hide-menu">Reportes<span class="fa arrow"></span></span></a>
        <ul class="nav nav-second-level collapse">
          <li>
            <a href="reportesRespuesta.php"><i class="fa-fw">R</i>
              <span class="hide-menu">Rep Respuestas Usuarios</span></a>
          </li>
          <li>
            <a href="reportesUsuariosEvaluacion.php"><i class="fa-fw">R</i>
              <span class="hide-menu">Rep Usuarios</span></a>
          </li>
          <li>
            <a href="ev-usuarios-graficos.php"><i class="fa-fw">G</i>
              <span class="hide-menu">Rep Graficos</span></a>
          </li>
          <li>
            <a href="repIngresoEvaluacion.php"><i class="fa-fw">R</i>
              <span class="hide-menu">Rep Ingreso Evaluación</span></a>
          </li>

          <li>
            <a href="reportesPorNivel.php"><i class="fa-fw">R</i>
              <span class="hide-menu">Rep Por Nivel</span></a>
          </li>
        </ul>
      </li>

      <li>
        <a href="./ManualAdmEvalu.pdf" target="_black"><i class="mdi mdi-format-list-bulleted fa-file-pdf-o"></i>
          <span class="hide-menu">Manual de usuario</span></a>
      </li>

    </ul>
  </div>
</div>
</body>
</html>