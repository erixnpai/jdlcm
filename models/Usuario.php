<?php

namespace Model;

class Usuario extends ActiveRecord {
    protected static $tabla = 'usuario';
    protected static $columnasDB = ['Id', 'usser', 'password', 'Id_Tipo_Usuario'];

    public $Id;
    public $usser;
    public $password;
    public $Id_Tipo_Usuario;

    public function __construct($args = [])
    {
        $this->Id = $args['Id'] ?? null;
        $this->usser = $args['usser'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->Id_Tipo_Usuario = $args['Id_Tipo_Usuario'] ?? null;
    }


}
?>
