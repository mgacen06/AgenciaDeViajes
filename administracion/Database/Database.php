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
}

?>