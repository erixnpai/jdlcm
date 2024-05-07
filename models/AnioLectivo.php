<?php

namespace Model;
class AnioLectivo extends ActiveRecord {
    protected static $tabla = 'anio_lectivo';
    protected static $columnasDB = ['Id', 'anio'];

    public $Id;
    public $anio;

    public function __construct($args = [])
    {
        $this->Id = $args['Id'] ?? null;
        $this->anio = $args['anio'] ?? null;
    }

   
}