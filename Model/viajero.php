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
// elimina la tupla 
    public function Delete($id_persona)
    {
        try
        {
            $sql = $this->pdo
                        ->prepre("DELETE FROM viajero WHERE ID_persona = ?");
            $sql->execute(array($id_persona)); 
        }catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
    //actualiza
    public function Update($data)
    {
        try
        {
            $sql = "UPDATE viajero SET
                        Name = ?,
                        \"Personal identification\" = ? ,
                        Address = ?,
                        phone = ?
                    WHERE id_persona = ?";

                    $this->pdo->prepare($sql)-> execute(
                        array(
                            $data->name,
                            $data->personal_identification,
                            $data->address,
                            $data->phone,
                            $data->id_persona
                        )
                        );

        }catch(Exception $e)
        {
            die($e->getMessage());
        }

    }
    public function Insert(viajero $data)
    {
        try
		{
			//Sentencia SQL.
			$sql = "INSERT INTO viajero (name,`Personal identification`,address,phone)
		        VALUES (?, ?, ?, ?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->name,
                    $data->personal_identification,
                    $data->address,
                    $data->phone,
                    
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
        }
    }
}















?>