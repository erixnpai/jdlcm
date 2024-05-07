<?php

namespace Model;

class DetalleTutorEstudiante extends ActiveRecord {
    protected static $tabla = 'detalle_tutor_estudiante';
    protected static $columnasDB = ['Id', 'Id_Tutor', 'Id_Estudiante'];

    public $Id;
    public $Id_Tutor;
    public $Id_Estudiante;

    public function __construct($args = [])
    {
        $this->Id = $args['Id'] ?? null;
        $this->Id_Tutor = $args['Id_Tutor'] ?? null;
        $this->Id_Estudiante = $args['Id_Estudiante'] ?? null;
    }

}
?>
