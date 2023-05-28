<?php
class Proyectos {
  
    public static function listarproyectos(){
        include_once('../config/init_db.php');
        DB::$encoding = 'utf8';
        $resultado = DB::query("SELECT * FROM proyectos");
        
        return $resultado; 
    }

    public static function crear($v){
        @session_start();
		$user_id = $_SESSION['ID'];
        include_once('../config/init_db.php');
        DB::$encoding = 'utf8';
       $insert = DB::query("INSERT INTO proyectos(
                                        id_usuario,
                                        objetivo,
                                        costo_fijos,
                                        costos_variables,
                                        presupuesto,
                                        categoria
                                    )
                                    VALUES(
                                        $user_id,
                                        '{$v['nombre']}',
                                        '{$v['costo_fijo']}',
                                        '{$v['costo_variable']}',
                                        '{$v['presupuesto']}',
                                        '{$v['Tipo']}'
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
                                presupuesto        = '{$v['presupuesto1']}',
                                ahorro_total        = '{$v['ahorro_total']}'

                            WHERE  id_proyectos         = '{$v['id']}'");
        return $update;
    }

    public static function eliminarXid($v){
        include_once('../config/init_db.php');
        DB::$encoding = 'utf8';
        $eliminar = DB ::query("UPDATE 
                                    proyectos 
                                SET
                                    estado = 'Finalizado'
                                
                                WHERE id_proyectos         = '{$v['id']}'");
        return $eliminar;

}

   
}