<?php

namespace Model;

class Nota extends ActiveRecord {
    protected static $tabla = 'Nota';
    protected static $columnasDB = ['idNota', 'Nota', 'Asignatura_idAsignatura', 'Matricula_idMatricula'];

    public $idNota;
    public $Nota;
    public $Asignatura_idAsignatura;
    public $Matricula_idMatricula;

    public function __construct($args = [])
    {
        $this->idNota = $args['idNota'] ?? null;
        $this->Nota = $args['Nota'] ?? null;
        $this->Asignatura_idAsignatura = $args['Asignatura_idAsignatura'] ?? null;
        $this->Matricula_idMatricula = $args['Matricula_idMatricula'] ?? null;
    }


    /**
     * Get the value of idNota
     */
    public function getIdNota() {
        return $this->idNota;
    }

    /**
     * Set the value of idNota
     */
    public function setIdNota($idNota): self {
        $this->idNota = $idNota;
        return $this;
    }

    /**
     * Get the value of Nota
     */
    public function getNota() {
        return $this->Nota;
    }

    /**
     * Set the value of Nota
     */
    public function setNota($Nota): self {
        $this->Nota = $Nota;
        return $this;
    }

    /**
     * Get the value of Asignatura_idAsignatura
     */
    public function getAsignaturaIdAsignatura() {
        return $this->Asignatura_idAsignatura;
    }

    /**
     * Set the value of Asignatura_idAsignatura
     */
    public function setAsignaturaIdAsignatura($Asignatura_idAsignatura): self {
        $this->Asignatura_idAsignatura = $Asignatura_idAsignatura;
        return $this;
    }

    /**
     * Get the value of Matricula_idMatricula
     */
    public function getMatriculaIdMatricula() {
        return $this->Matricula_idMatricula;
    }

    /**
     * Set the value of Matricula_idMatricula
     */
    public function setMatriculaIdMatricula($Matricula_idMatricula): self {
        $this->Matricula_idMatricula = $Matricula_idMatricula;
        return $this;
    }
}
?>
