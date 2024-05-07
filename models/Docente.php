<?php

namespace Model;

class Docente extends ActiveRecord {
    protected static $tabla = 'docente';
    protected static $columnasDB = ['Id', 'Cod_docente', 'Id_Usuario'];

    public $Id;
    public $Cod_docente;
    public $Id_Usuario;

    public function __construct($args = [])
    {
        $this->Id = $args['Id'] ?? null;
        $this->Cod_docente = $args['Cod_docente'] ?? '';
        $this->Id_Usuario = $args['Id_Usuario'] ?? null;
    }

 
}
?>
