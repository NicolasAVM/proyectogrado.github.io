<?php
class Prestamos {
  
    public static function listarproyectos(){
        include_once('../config/init_db.php');
        DB::$encoding = 'utf8';
        $resultado = DB::query("SELECT * FROM prestamo");
        
        return $resultado; 
    }

    public static function crear($v){
        @session_start();
		$user_id = $_SESSION['ID'];
        include_once('../config/init_db.php');
        DB::$encoding = 'utf8';
       $insert = DB::query("INSERT INTO prestamo(
                                        id_usuario,
                                        valor_prestamo,
                                        tiempo_pago,
                                        deuda_actual,
                                        interes
                                    )
                                    VALUES(
                                        $user_id,
                                        '{$v['prestamo']}',
                                        '{$v['tiempo']}',
                                        '{$v['prestamo']}',
                                        '{$v['interes']}'
                                    )");
        return $insert;
    }

    public static function verXid($v){
        include_once('../config/init_db.php');
        DB::$encoding = 'utf8';
        $resultado = DB::queryFirstRow("SELECT * FROM `proyectos` WHERE id_proyectos = '{$v['id']}'");
        return $resultado;
    }

    public static function update($v){
        include_once('../config/init_db.php');
        DB::$encoding = 'utf8';
       $update = DB::query("UPDATE
                                proyectos
                            SET
                                objetivo        = '{$v['nombre1']}',
                                costo_fijos      = '{$v['costo_fijo1']}',
                                costos_variables     = '{$v['costo_variable1']}',
                                presupuesto        = '{$v['presupuesto1']}'
                            WHERE  id_proyectos         = '{$v['id']}'");
        return $update;
    }

   
}