<?php
    public class EstadoUsuario {
        private $id;
        private $estadoUsuario;

        public EstadoUsuario() {
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of estadoUsuario
         */ 
        public function getEstadoUsuario()
        {
                return $this->estadoUsuario;
        }

        /**
         * Set the value of estadoUsuario
         *
         * @return  self
         */ 
        public function setEstadoUsuario($estadoUsuario)
        {
                $this->estadoUsuario = $estadoUsuario;

                return $this;
        }
    }
?>