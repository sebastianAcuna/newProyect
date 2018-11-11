<?php
    class Usuario
    {
        private $id;
        private $rut;
        private $nombre;
        private $apellido;
        private $sexo;
        private $correo;
        private $foto;
        private $fechaNacimiento;
        private $password;

        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }