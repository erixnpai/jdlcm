<?php

namespace Model;

class DetalleNotaAsignatura extends ActiveRecord {
    protected static $tabla = 'detalle_nota_asignatura';
    protected static $columnasDB = ['Id', 'id_detalle_grado_asignatura', 'id_matricula', 'Nota'];

    public $Id;
    public $id_detalle_grado_asignatura;
    public $id_matricula;
    public $Nota;

    public function __construct($args = [])
    {
        $this->Id = $args['Id'] ?? null;
        $this->id_detalle_grado_asignatura = $args['id_detalle_grado_asignatura'] ?? null;
        $this->id_matricula = $args['id_matricula'] ?? null;
        $this->Nota = $args['Nota'] ?? 0;
    }

   
}
?>
