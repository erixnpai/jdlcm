<?php

namespace Model;

class Grado extends ActiveRecord {
    protected static $tabla = 'grado';
    protected static $columnasDB = ['Id', 'Nombre'];

    public $Id;
    public $Nombre;

    public function __construct($args = [])
    {
        $this->Id = $args['Id'] ?? null;
        $this->Nombre = $args['Nombre'] ?? '';
    }

    
}
?>
