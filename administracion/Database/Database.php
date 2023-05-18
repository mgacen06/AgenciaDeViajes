<?php
class Database
{
    // Conectar
    public static function conectar()
    {
        $driver = 'mysql';
        $host = 'localhost';
        $port = '3306';
        $user = 'pfcAdmin';
        $password = '1234';
        $db = 'agencia';

        $dsn = "$driver:dbname=$db;host=$host;port=$port";

        try {
            // La variable $gbd tiene toda la configuracion de la conexion
            $gbd = new PDO($dsn, $user, $password);
            // echo 'Conectado correctamente';
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        return $gbd;
    }

    public static function getAllAlojamientos()
    {
        $sql = "SELECT * FROM alojamientos";
        return self::conectar()->query($sql);

    }

    public static function getAllUsuarios()
    {
        $sql = "SELECT * FROM usuarios";
        return self::conectar()->query($sql);

    }

    public static function getAllReservas()
    {
        $sql = "SELECT * FROM reservas";
        return self::conectar()->query($sql);

    }
    public static function update($datos){
       $sql = "UPDATE FROM alojamientos SET nombreViaje ='$datos[1]', imagen='$datos[2]', tipoEstancia='$datos[3]', ubicacion= '$datos[4]', precioPorNoche=$datos[5] WHERE id='$datos[0]' "; 
       /*
        nombreViaje varchar(45) NOT NULL,
        imagen varchar(45) NOT NULL,
        tipoEstancia varchar(15) NOT NULL,
        ubicacion varchar(45),
        precioPorNoche DOUBLE NOT NULL,
        */
        self::conectar()->exec($sql);
    }
    public static function delete($id){
        $sql= "DELETE FROM alojamientos WHERE id = $id";
        self::conectar()->exec($sql);
    }
    /*comprobar la posición de cada valor  */
    public static function save($datos){
        $sql= "INSERT INTO alojamientos(nombreViaje, imagen, tipoEstancia, ubicacion, precioPorNoche) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]' , $datos[4])";
        self::conectar()->exec($sql);
    }
    public static function findById($id){
        $sql ="SELECT  * FROM alojamientos WHERE id= $id";
        $alojamiento = self::conectar()->query($sql);
        return $alojamiento->fetch(PDO::FETCH_ASSOC);
    }

}

?>