<?php

namespace Model;

class Tutor extends ActiveRecord {
    protected static $tabla = 'tutor';
    protected static $columnasDB = ['Id', 'Cedula', 'Ocupacion', 'Id_Usuario'];

    public $Id;
    public $Cedula;
    public $Ocupacion;
    public $Id_Usuario;

    public function __construct($args = [])
    {
        $this->Id = $args['Id'] ?? null;
        $this->Cedula = $args['Cedula'] ?? '';
        $this->Ocupacion = $args['Ocupacion'] ?? '';
        $this->Id_Usuario = $args['Id_Usuario'] ?? null;
    }

    
}
?>
