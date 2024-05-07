<?php

namespace Model;

class DetalleAnioLectivoGrado extends ActiveRecord {
    protected static $tabla = 'detalle_aniolectivo_grado';
    protected static $columnasDB = ['Id', 'Id_anio_lectivo', 'id_grado'];

    public $Id;
    public $Id_anio_lectivo;
    public $id_grado;

    public function __construct($args = [])
    {
        $this->Id = $args['Id'] ?? null;
        $this->Id_anio_lectivo = $args['Id_anio_lectivo'] ?? null;
        $this->id_grado = $args['id_grado'] ?? null;
    }

    
}
?>
