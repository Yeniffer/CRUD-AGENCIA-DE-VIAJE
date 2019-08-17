<?php

class viajero
{
    //atributo para conexion a DBMS
    private $pdo;
    //atributo del objeto viajero
    public $id_persona;
    public $name;
    public $personal_identification;
    public $address;
    public $phone;

    //conexion a DBMS
    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Database::Connect();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
    // Seleccionara toda las tuplas de la tabla

    public function Table()
    {   
        try
        {
            $result = array();
            //sql para seleccionar los datos
            $sql = $this->pdo->prepare("SELECT * FROM viajero");
            //se ejcuta sql
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        { 
            die($e->getMessage());
        }
    }
// se obtiene los datos del proveedor 

    public function Read($id_persona)
    {
        try
        {
            $sql= $this->pdo->prepare("SELECT * FROM viajero WHERE ID_persona = ?");
            $sql->execute(array($id_persona));
            return $sql->fetch(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }






}








?>