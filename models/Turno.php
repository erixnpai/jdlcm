<?php

namespace Model;

class Turno extends ActiveRecord {
    protected static $tabla = 'Turno';
    protected static $columnasDB = ['idTurno', 'Turno'];

    public $idTurno;
    public $Turno;

    public function __construct($args = [])
    {
        $this->idTurno = $args['idTurno'] ?? null;
        $this->Turno = $args['Turno'] ?? '';
    }


    /**
     * Get the value of idTurno
     */
    public function getIdTurno() {
        return $this->idTurno;
    }

    /**
     * Set the value of idTurno
     */
    public function setIdTurno($idTurno): self {
        $this->idTurno = $idTurno;
        return $this;
    }

    /**
     * Get the value of Turno
     */
    public function getTurno() {
        return $this->Turno;
    }

    /**
     * Set the value of Turno
     */
    public function setTurno($Turno): self {
        $this->Turno = $Turno;
        return $this;
    }
}
?>
