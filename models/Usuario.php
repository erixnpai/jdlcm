<?php

namespace Model;

class Usuario extends ActiveRecord {
    protected static $tabla = 'usuario';
    protected static $columnasDB = ['IdUsuario', 'Usuario', 'Nombre', 'Contrasena', 'idRol'];

    public $Id;
    public $usser;
    public $nombre;
    public $password;
    public $Id_Tipo_Rol;

    public function __construct($args = [])
    {
        $this->Id = $args['IdUsuario'] ?? null;
        $this->usser = $args['Usuario'] ?? '';
        $this->nombre = $args['Nombre'] ?? '';
        $this->password = $args['Contrasena'] ?? '';
        $this->Id_Tipo_Rol = $args['idRol'] ?? null;
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
     * Get the value of usser
     */
    public function getUsser() {
        return $this->usser;
    }

    /**
     * Set the value of usser
     */
    public function setUsser($usser): self {
        $this->usser = $usser;
        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self {
        $this->password = $password;
        return $this;
    }

    /**
     * Get the value of Id_Tipo_Rol
     */
    public function getIdTipoRol() {
        return $this->Id_Tipo_Rol;
    }

    /**
     * Set the value of Id_Tipo_Rol
     */
    public function setIdTipoRol($Id_Tipo_Rol): self {
        $this->Id_Tipo_Rol = $Id_Tipo_Rol;
        return $this;
    }
}
?>
