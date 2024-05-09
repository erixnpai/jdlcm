<?php

namespace Model;

class Seccion extends ActiveRecord {
    protected static $tabla = 'Seccion';
    protected static $columnasDB = ['idSeccion', 'NSecc'];

    public $idSeccion;
    public $NSecc;

    public function __construct($args = [])
    {
        $this->idSeccion = $args['idSeccion'] ?? null;
        $this->NSecc = $args['NSecc'] ?? '';
    }


    /**
     * Get the value of idSeccion
     */
    public function getIdSeccion() {
        return $this->idSeccion;
    }

    /**
     * Set the value of idSeccion
     */
    public function setIdSeccion($idSeccion): self {
        $this->idSeccion = $idSeccion;
        return $this;
    }

    /**
     * Get the value of NSecc
     */
    public function getNSecc() {
        return $this->NSecc;
    }

    /**
     * Set the value of NSecc
     */
    public function setNSecc($NSecc): self {
        $this->NSecc = $NSecc;
        return $this;
    }
}
?>
