<?php

namespace Model;



class DatosPersonales extends ActiveRecord {
    protected static $tabla = 'datos_personales';
    protected static $columnasDB = ['Id', 'Nombres', 'Apellidos', 'Telefono', 'Direccion', 'id_sexo', 'id_Usuario'];

    public $Id;
    public $Nombres;
    public $Apellidos;
    public $Telefono;
    public $Direccion;
    public $id_sexo;
    public $id_Usuario;

    public function __construct($args = [])
    {
        $this->Id = $args['Id'] ?? null;
        $this->Nombres = $args['Nombres'] ?? '';
        $this->Apellidos = $args['Apellidos'] ?? '';
        $this->Telefono = $args['Telefono'] ?? '';
        $this->Direccion = $args['Direccion'] ?? '';
        $this->id_sexo = $args['id_sexo'] ?? null;
        $this->id_Usuario = $args['id_Usuario'] ?? null;
    }


}