<?php 

  class Registro{


  	
  	public static function Registrarse($p) {

  		include_once("../config/init_db.php");
        DB::$encoding = 'utf8';

           $Insert = DB::query("INSERT INTO usuarios (nombre , contraseña , correo) VALUES ('{$p['user_name']}','{$p['user_password']}','{$p['user_email']}')");

          return $Insert;

  	    }

  }



?>