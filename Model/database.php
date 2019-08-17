<?php
class Database{
    public static function Connect(){
        $pdo = new PDO ('mysql:host=localhost;dbname=agencia_de_viajes;charset=utf8','root','Console.Log(YO2)');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

}

?>