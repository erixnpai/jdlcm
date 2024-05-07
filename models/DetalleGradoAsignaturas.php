<?php

namespace Model;

class DetalleGradoAsignaturas extends ActiveRecord {
    protected static $tabla = 'detalle_grado_asignaturas';
    protected static $columnasDB = ['Id', 'Id_detalle_aniolectivo_grado', 'Id_asignatura', 'Id_docente'];

    public $Id;
    public $Id_detalle_aniolectivo_grado;
    public $Id_asignatura;
    public $Id_docente;

    public function __construct($args = [])
    {
        $this->Id = $args['Id'] ?? null;
        $this->Id_detalle_aniolectivo_grado = $args['Id_detalle_aniolectivo_grado'] ?? null;
        $this->Id_asignatura = $args['Id_asignatura'] ?? null;
        $this->Id_docente = $args['Id_docente'] ?? null;
    }

   
}
?>
