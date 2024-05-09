<?php

namespace Model;

class Sexo extends ActiveRecord {
    protected static $tabla = 'Sexo';
    protected static $columnasDB = ['idSexo', 'Sexo'];

    public $idSexo;
    public $Sexo;

    public function __construct($args = [])
    {
        $this->idSexo = $args['idSexo'] ?? null;
        $this->Sexo = $args['Sexo'] ?? '';
    }


    /**
     * Get the value of idSexo
     */
    public function getIdSexo() {
        return $this->idSexo;
    }

    /**
     * Set the value of idSexo
     */
    public function setIdSexo($idSexo): self {
        $this->idSexo = $idSexo;
        return $this;
    }

    /**
     * Get the value of Sexo
     */
    public function getSexo() {
        return $this->Sexo;
    }

    /**
     * Set the value of Sexo
     */
    public function setSexo($Sexo): self {
        $this->Sexo = $Sexo;
        return $this;
    }
}
?>
