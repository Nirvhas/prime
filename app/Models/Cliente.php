<?php

namespace App\Models;

class BaseCliente
{
    function getClientes()
    {
        $conection = \App\Database\ConectionPDO::createConection();
        $statement = $conection->prepare('select * from clientes');
        $statement->execute();
        $arrayResult = $statement->fetchAll();
        $arrayClinete = array();
        foreach ($arrayResult as $row) {
            $clinete = new Cliente();
            $clinete->id = $row["id"];
            $clinete->nombre = $row["nombre"];
            $clinete->correo = $row["correo"];
            $clinete->celular = $row["celular"];
            array_push($arrayClinete, $clinete);
        }
        return $arrayClinete;
    }
}

class Cliente extends BaseCliente
{
    public $id;
    public $nombre;
    public $correo;
    public $celular;
}
