<?php

namespace Model;

class Matricula extends ActiveRecord {
    protected static $tabla = 'Matricula';
    protected static $columnasDB = ['idMatricula', 'CodMatricula', 'Anio_Academico_idAnio_Academico', 'Grado_idGrado', 'Turno_idTurno', 'Alumnos_idAlumno', 'Fecha'];

    public $idMatricula;
    public $CodMatricula;
    public $Anio_Academico_idAnio_Academico;
    public $Grado_idGrado;
    public $Turno_idTurno;
    public $Alumnos_idAlumno;
    public $Fecha;

    public function __construct($args = [])
    {
        $this->idMatricula = $args['idMatricula'] ?? null;
        $this->CodMatricula = $args['CodMatricula'] ?? null;
        $this->Anio_Academico_idAnio_Academico = $args['Anio_Academico_idAnio_Academico'] ?? null;
        $this->Grado_idGrado = $args['Grado_idGrado'] ?? null;
        $this->Turno_idTurno = $args['Turno_idTurno'] ?? null;
        $this->Alumnos_idAlumno = $args['Alumnos_idAlumno'] ?? null;
        $this->Fecha = $args['Fecha'] ?? null;
    }


    /**
     * Get the value of idMatricula
     */
    public function getIdMatricula() {
        return $this->idMatricula;
    }

    /**
     * Set the value of idMatricula
     */
    public function setIdMatricula($idMatricula): self {
        $this->idMatricula = $idMatricula;
        return $this;
    }

    /**
     * Get the value of CodMatricula
     */
    public function getCodMatricula() {
        return $this->CodMatricula;
    }

    /**
     * Set the value of CodMatricula
     */
    public function setCodMatricula($CodMatricula): self {
        $this->CodMatricula = $CodMatricula;
        return $this;
    }

    /**
     * Get the value of Anio_Academico_idAnio_Academico
     */
    public function getAnioAcademicoIdAnioAcademico() {
        return $this->Anio_Academico_idAnio_Academico;
    }

    /**
     * Set the value of Anio_Academico_idAnio_Academico
     */
    public function setAnioAcademicoIdAnioAcademico($Anio_Academico_idAnio_Academico): self {
        $this->Anio_Academico_idAnio_Academico = $Anio_Academico_idAnio_Academico;
        return $this;
    }

    /**
     * Get the value of Grado_idGrado
     */
    public function getGradoIdGrado() {
        return $this->Grado_idGrado;
    }

    /**
     * Set the value of Grado_idGrado
     */
    public function setGradoIdGrado($Grado_idGrado): self {
        $this->Grado_idGrado = $Grado_idGrado;
        return $this;
    }

    /**
     * Get the value of Turno_idTurno
     */
    public function getTurnoIdTurno() {
        return $this->Turno_idTurno;
    }

    /**
     * Set the value of Turno_idTurno
     */
    public function setTurnoIdTurno($Turno_idTurno): self {
        $this->Turno_idTurno = $Turno_idTurno;
        return $this;
    }

    /**
     * Get the value of Alumnos_idAlumno
     */
    public function getAlumnosIdAlumno() {
        return $this->Alumnos_idAlumno;
    }

    /**
     * Set the value of Alumnos_idAlumno
     */
    public function setAlumnosIdAlumno($Alumnos_idAlumno): self {
        $this->Alumnos_idAlumno = $Alumnos_idAlumno;
        return $this;
    }

    /**
     * Get the value of Fecha
     */
    public function getFecha() {
        return $this->Fecha;
    }

    /**
     * Set the value of Fecha
     */
    public function setFecha($Fecha): self {
        $this->Fecha = $Fecha;
        return $this;
    }
}
?>
