<?php

namespace Model;

class Tutor extends ActiveRecord {
    protected static $tabla = 'Tutor';
    protected static $columnasDB = ['idTutor', 'Nombres', 'Apellidos', 'Direccion', 'Cedula', 'Telefono', 'Parentesco', 'Sexo_idSexo'];

    public $idTutor;
    public $Nombres;
    public $Apellidos;
    public $Direccion;
    public $Cedula;
    public $Telefono;
    public $Parentesco;
    public $Sexo_idSexo;

    public function __construct($args = [])
    {
        $this->idTutor = $args['idTutor'] ?? null;
        $this->Nombres = $args['Nombres'] ?? '';
        $this->Apellidos = $args['Apellidos'] ?? '';
        $this->Direccion = $args['Direccion'] ?? '';
        $this->Cedula = $args['Cedula'] ?? '';
        $this->Telefono = $args['Telefono'] ?? '';
        $this->Parentesco = $args['Parentesco'] ?? '';
        $this->Sexo_idSexo = $args['Sexo_idSexo'] ?? null;
    }


    /**
     * Get the value of idTutor
     */
    public function getIdTutor() {
        return $this->idTutor;
    }

    /**
     * Set the value of idTutor
     */
    public function setIdTutor($idTutor): self {
        $this->idTutor = $idTutor;
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
     * Get the value of Cedula
     */
    public function getCedula() {
        return $this->Cedula;
    }

    /**
     * Set the value of Cedula
     */
    public function setCedula($Cedula): self {
        $this->Cedula = $Cedula;
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
     * Get the value of Parentesco
     */
    public function getParentesco() {
        return $this->Parentesco;
    }

    /**
     * Set the value of Parentesco
     */
    public function setParentesco($Parentesco): self {
        $this->Parentesco = $Parentesco;
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
