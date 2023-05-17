<?php  
class Login{

	public static function mdlIngresar($d){
		include('../config/init_db.php');
        DB::$encoding = 'utf8';
        $password_codificado = $d['password_codificado'];
		$login = DB::queryFirstRow("SELECT
									    ID,
									    nombre,
									    contraseña,
									    correo
									FROM
									    usuarios
									WHERE
									    correo = '{$d['email']}'");
		if (!$login) {
            // El email no existe en la base de datos
            $datos = array(
                'error' => true,
                'mensaje' => 'El email ingresado no se encuentra registrado'
            );
            return $datos;
        }

        // Verificar si la contraseña es correcta
        $contraseña = $login['contraseña'];
        if ($password_codificado !== $contraseña) {
            // La contraseña es incorrecta
            $datos = array(
                'error' => true,
                'mensaje' => 'La contraseña ingresada es incorrecta'
            );
            return $datos;
        }

        // Iniciar sesión y redirigir al usuario a la página menu.php
        session_start();
        $_SESSION['ID'] = $login['ID'];
        $_SESSION['nombre'] = $login['nombre'];
        $_SESSION['correo'] = $login['correo'];
        unset($login['contraseña']);
        $datos = array(
            'error' => false,
            'mensaje' => 'Ingresando..'
        );
        return $datos;
	}
}