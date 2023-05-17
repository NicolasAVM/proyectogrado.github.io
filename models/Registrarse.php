<?php 

  class Registro{


  	
  	public static function Registrarse($p) {

  		include_once("../config/init_db.php");
        DB::$encoding = 'utf8';

           $Insert = DB::query("INSERT INTO usuarios (nombre , contraseña , correo) VALUES ('{$p['name']}','{$p['password_codificado']}','{$p['email']}')");

          return $Insert;

  	    }

  }



?>