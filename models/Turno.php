<?php

namespace Model;

class Turno extends ActiveRecord {
    protected static $tabla = 'turno';
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
