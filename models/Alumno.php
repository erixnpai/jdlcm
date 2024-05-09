<?php

namespace Model;

class Alumno extends ActiveRecord {
    protected static $tabla = 'Alumnos';
    protected static $columnasDB = ['idAlumno', 'Nombres', 'Apellidos', 'Direccion', 'Fecha_Nacimiento', 'Telefono', 'Tutor_idTutor', 'Sexo_idSexo'];

    public $idAlumno;
    public $Nombres;
    public $Apellidos;
    public $Direccion;
    public $Fecha_Nacimiento;
    public $Telefono;
    public $Tutor_idTutor;
    public $Sexo_idSexo;

    public function __construct($args = [])
    {
        $this->idAlumno = $args['idAlumno'] ?? null;
        $this->Nombres = $args['Nombres'] ?? '';
        $this->Apellidos = $args['Apellidos'] ?? '';
        $this->Direccion = $args['Direccion'] ?? '';
        $this->Fecha_Nacimiento = $args['Fecha_Nacimiento'] ?? null;
        $this->Telefono = $args['Telefono'] ?? '';
        $this->Tutor_idTutor = $args['Tutor_idTutor'] ?? null;
        $this->Sexo_idSexo = $args['Sexo_idSexo'] ?? null;
    }


    /**
     * Get the value of idAlumno
     */
    public function getIdAlumno() {
        return $this->idAlumno;
    }

    /**
     * Set the value of idAlumno
     */
    public function setIdAlumno($idAlumno): self {
        $this->idAlumno = $idAlumno;
        return $this;
    }

    /**
     * Get the value of Nombres
     */
    public function getNombres() {
        return $this->Nombres;
    }

    /**
     * Set the value of Nombres
     */
    public function setNombres($Nombres): self {
        $this->Nombres = $Nombres;
        return $this;
    }

    /**
     * Get the value of Apellidos
     */
    public function getApellidos() {
        return $this->Apellidos;
    }

    /**
     * Set the value of Apellidos
     */
    public function setApellidos($Apellidos): self {
        $this->Apellidos = $Apellidos;
        return $this;
    }

    /**
     * Get the value of Direccion
     */
    public function getDireccion() {
        return $this->Direccion;
    }

    /**
     * Set the value of Direccion
     */
    public function setDireccion($Direccion): self {
        $this->Direccion = $Direccion;
        return $this;
    }

    /**
     * Get the value of Fecha_Nacimiento
     */
    public function getFechaNacimiento() {
        return $this->Fecha_Nacimiento;
    }

    /**
     * Set the value of Fecha_Nacimiento
     */
    public function setFechaNacimiento($Fecha_Nacimiento): self {
        $this->Fecha_Nacimiento = $Fecha_Nacimiento;
        return $this;
    }

    /**
     * Get the value of Telefono
     */
    public function getTelefono() {
        return $this->Telefono;
    }

    /**
     * Set the value of Telefono
     */
    public function setTelefono($Telefono): self {
        $this->Telefono = $Telefono;
        return $this;
    }

    /**
     * Get the value of Tutor_idTutor
     */
    public function getTutorIdTutor() {
        return $this->Tutor_idTutor;
    }

    /**
     * Set the value of Tutor_idTutor
     */
    public function setTutorIdTutor($Tutor_idTutor): self {
        $this->Tutor_idTutor = $Tutor_idTutor;
        return $this;
    }

    /**
     * Get the value of Sexo_idSexo
     */
    public function getSexoIdSexo() {
        return $this->Sexo_idSexo;
    }

    /**
     * Set the value of Sexo_idSexo
     */
    public function setSexoIdSexo($Sexo_idSexo): self {
        $this->Sexo_idSexo = $Sexo_idSexo;
        return $this;
    }
}
?>
