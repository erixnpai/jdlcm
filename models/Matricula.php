<?php

namespace Model;

class Matricula extends ActiveRecord {
    protected static $tabla = 'matricula';
    protected static $columnasDB = ['Id', 'Id_estudiante', 'Id_tutor', 'id_grado', 'id_turno', 'id_anio_lectivo'];

    public $Id;
    public $Id_estudiante;
    public $Id_tutor;
    public $id_grado;
    public $id_turno;
    public $id_anio_lectivo;

    public function __construct($args = [])
    {
        $this->Id = $args['Id'] ?? null;
        $this->Id_estudiante = $args['Id_estudiante'] ?? null;
        $this->Id_tutor = $args['Id_tutor'] ?? null;
        $this->id_grado = $args['id_grado'] ?? null;
        $this->id_turno = $args['id_turno'] ?? null;
        $this->id_anio_lectivo = $args['id_anio_lectivo'] ?? null;
    }

    
}
?>
