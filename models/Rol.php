<?php

namespace Model;

class TipoUsuario extends ActiveRecord {
    protected static $tabla = 'tol';
    protected static $columnasDB = ['IdRol', 'Rol'];

    public $Id;
    public $Rol;

    public function __construct($args = [])
    {
        $this->Id = $args['IdRol'] ?? null;
        $this->Rol = $args['Rol'] ?? '';
    }

  

    /**
     * Get the value of Id
     */
    public function getId() {
        return $this->Id;
    }

    /**
     * Set the value of Id
     */
    public function setId($Id): self {
        $this->Id = $Id;
        return $this;
    }

    /**
     * Get the value of Rol
     */
    public function getRol() {
        return $this->Rol;
    }

    /**
     * Set the value of Rol
     */
    public function setRol($Rol): self {
        $this->Rol = $Rol;
        return $this;
    }
}
?>
