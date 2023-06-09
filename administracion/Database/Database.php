<?php
class Database
{
    // Conectar
    public static function conectar(){

        $driver="mysql";

        $host="mysql-5706.dinaserver.com";

        $bd="tfg2022imf";

        $port=3306;

        $dsn="$driver:host=$host;port=$port;dbname=$bd";

        try {

            $conexion=new PDO($dsn, 'admintfg22', 'Morcilla01.');
            
            // $conexion->setAttribute(PDO::ATTR_ERRORMODE, PDO::ERRORMODE_EXCEPTION);
            // echo 'Conectado correctamente';

        } catch (PDOException $e) {

            echo 'Falló la conexión ' . $e->getMessage();

        }

        return $conexion;

    }


    public static function getAllAlojamientos()
    {
        $sql = "SELECT * FROM 7_alojamientos";
        return self::conectar()->query($sql);
    }

    public static function getAllUsuarios()
    {
        $sql = "SELECT * FROM 7_usuarios";
        return self::conectar()->query($sql);
    }

    public static function getAllReservas()
    {
        $sql = "SELECT * FROM 7_reservas";
        return self::conectar()->query($sql);
    }

    public static function updateAlojamientos($datos){
        $sql = "UPDATE 7_alojamientos SET nombreViaje ='$datos[1]', imagen='$datos[2]', tipoEstancia='$datos[3]', ubicacion= '$datos[4]', precioPorNoche=$datos[5] WHERE id='$datos[0]' "; 
        self::conectar()->exec($sql);
    }
    public static function updateReservas($datos){
        $sql = "UPDATE 7_reservas SET fechaInicio ='$datos[1]', fechaFin='$datos[2]', usuarios_id=$datos[3], alojamientos_id= $datos[4] WHERE id='$datos[0]' "; 
        self::conectar()->exec($sql);
     }
    public static function updateUsuarios($datos){
        $sql = "UPDATE 7_usuarios SET rol='$datos[1]', dni='$datos[2]', nombre='$datos[3]', apellidos= '$datos[4]', correo='$datos[5]', contrasenia='$datos[6]' direccion=$datos[7] WHERE id='$datos[0]' "; 
        self::conectar()->exec($sql);
    }

    public static function deleteAlojamientos($id){
        $sql= "DELETE FROM 7_alojamientos WHERE id = $id";
        self::conectar()->exec($sql);
    }
    public static function deleteUsuarios($id){
        $sql= "DELETE FROM 7_usuarios WHERE id = $id";
        self::conectar()->exec($sql);
    }
    public static function deleteReservas($id){
        $sql= "DELETE FROM 7_reservas WHERE id = $id";
        self::conectar()->exec($sql);
    }

    public static function saveAlojamientos($datos){
        $sql= "INSERT INTO 7_alojamientos(nombreViaje, imagen, tipoEstancia, ubicacion, precioPorNoche) VALUES ($datos[1], '$datos[2]', '$datos[3]', '$datos[4]' , '$datos[5]')";
         var_dump($sql);
         exit();
        self::conectar()->exec($sql);
    }
    public static function saveReservas($datos){
        $sql= "INSERT INTO 7_reservas(fechaInicio, fechaFin, usuarios_id, alojamientos_id) VALUES ('$datos[1]', '$datos[2]', $datos[3], $datos[4])";
        self::conectar()->exec($sql);
    } 
    public static function saveUsuarios($datos){
        $sql= "INSERT INTO 7_usuarios(rol, dni, nombre, apellidos, correo, contrasenia, direccion) VALUES ($datos[1], '$datos[2]', '$datos[3]', '$datos[4]' , '$datos[5]', '$datos[6]', '$datos[7]')";
        self::conectar()->exec($sql);
    }

    public static function findByIdAlojamientos($id){
        $sql ="SELECT  * FROM 7_alojamientos WHERE id= $id";
        $alojamiento = self::conectar()->query($sql);
        return $alojamiento->fetch(PDO::FETCH_ASSOC);
    }
    public static function findByIdReservas($id){
        $sql ="SELECT * FROM 7_reservas WHERE id= $id";
        $reserva = self::conectar()->query($sql);
        return $reserva->fetch(PDO::FETCH_ASSOC);
    }
    public static function findByIdUsuarios($id){
        $sql ="SELECT  * FROM 7_usuarios WHERE id= $id";
        $usuario = self::conectar()->query($sql);
        return $usuario->fetch(PDO::FETCH_ASSOC);
    }

    public static function login($email, $password){
        // 1. Conectar a la BD

        // 2. Realizar consulta con el email y password recibido
        $sql = "SELECT * FROM 7_usuarios WHERE correo = '$email' AND contrasenia = '$password'";
        
        // 3. Si es correcto, devuelvo los datos del usuario
        $user = self::conectar()->query($sql);

        if($user != null){
            return $user->fetch(PDO::FETCH_ASSOC);
        }
        else{
            // 4. Si no es correcto, devuelvo null
            return null;
        }
    }
}
?>