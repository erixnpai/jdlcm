<?php

namespace Model;

class TipoUsuario extends ActiveRecord {
    protected static $tabla = 'tipo_usuario';
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
