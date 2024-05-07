<?php

namespace Model;

class Administrador extends ActiveRecord {
    protected static $tabla = 'administrador';
    protected static $columnasDB = ['Id', 'Cod_administrador', 'Id_Usuario'];

    public $Id;
    public $Cod_administrador;
    public $Id_Usuario;

    public function __construct($args = [])
    {
        $this->Id = $args['Id'] ?? null;
        $this->Cod_administrador = $args['Cod_administrador'] ?? '';
        $this->Id_Usuario = $args['Id_Usuario'] ?? null;
    }

    
}
?>
