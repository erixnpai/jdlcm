<?php

namespace Model;

class Grado extends ActiveRecord {
    protected static $tabla = 'Grado';
    protected static $columnasDB = ['idGrado', 'Grado', 'Seccion_idSeccion'];

    public $idGrado;
    public $Grado;
    public $Seccion_idSeccion;

    public function __construct($args = [])
    {
        $this->idGrado = $args['idGrado'] ?? null;
        $this->Grado = $args['Grado'] ?? null;
        $this->Seccion_idSeccion = $args['Seccion_idSeccion'] ?? null;
    }


    /**
     * Get the value of idGrado
     */
    public function getIdGrado() {
        return $this->idGrado;
    }

    /**
     * Set the value of idGrado
     */
    public function setIdGrado($idGrado): self {
        $this->idGrado = $idGrado;
        return $this;
    }

    /**
     * Get the value of Grado
     */
    public function getGrado() {
        return $this->Grado;
    }

    /**
     * Set the value of Grado
     */
    public function setGrado($Grado): self {
        $this->Grado = $Grado;
        return $this;
    }

    /**
     * Get the value of Seccion_idSeccion
     */
    public function getSeccionIdSeccion() {
        return $this->Seccion_idSeccion;
    }

    /**
     * Set the value of Seccion_idSeccion
     */
    public function setSeccionIdSeccion($Seccion_idSeccion): self {
        $this->Seccion_idSeccion = $Seccion_idSeccion;
        return $this;
    }
}
?>
