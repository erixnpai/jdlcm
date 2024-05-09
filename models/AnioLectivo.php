<?php

namespace Model;

class Asignatura extends ActiveRecord {
    protected static $tabla = 'Asignatura';
    protected static $columnasDB = ['idAsignatura', 'Asignatura'];

    public $idAsignatura;
    public $Asignatura;

    public function __construct($args = [])
    {
        $this->idAsignatura = $args['idAsignatura'] ?? null;
        $this->Asignatura = $args['Asignatura'] ?? '';
    }


    /**
     * Get the value of idAsignatura
     */
    public function getIdAsignatura() {
        return $this->idAsignatura;
    }

    /**
     * Set the value of idAsignatura
     */
    public function setIdAsignatura($idAsignatura): self {
        $this->idAsignatura = $idAsignatura;
        return $this;
    }

    /**
     * Get the value of Asignatura
     */
    public function getAsignatura() {
        return $this->Asignatura;
    }

    /**
     * Set the value of Asignatura
     */
    public function setAsignatura($Asignatura): self {
        $this->Asignatura = $Asignatura;
        return $this;
    }
}
?>
