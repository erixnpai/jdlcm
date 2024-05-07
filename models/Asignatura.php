<?php

namespace Model;

class Asignatura extends ActiveRecord {
    protected static $tabla = 'asignatura';
    protected static $columnasDB = ['Id', 'Nombre'];

    public $Id;
    public $Nombre;

    public function __construct($args = [])
    {
        $this->Id = $args['Id'] ?? null;
        $this->Nombre = $args['Nombre'] ?? '';
    }

   
}