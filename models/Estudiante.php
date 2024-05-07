<?php

namespace Model;

class Estudiante extends ActiveRecord {
    protected static $tabla = 'estudiante';
    protected static $columnasDB = ['Id', 'Cod_estudiante', 'Id_Usuario'];

    public $Id;
    public $Cod_estudiante;
    public $Id_Usuario;

    public function __construct($args = [])
    {
        $this->Id = $args['Id'] ?? null;
        $this->Cod_estudiante = $args['Cod_estudiante'] ?? '';
        $this->Id_Usuario = $args['Id_Usuario'] ?? null;
    }

    
}
?>
