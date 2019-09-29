<?php
    public class EstadoLibro {
        private $id;
        private $estadoLibro;

        public EstadoLibro() {
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
         * Get the value of estadoLibro
         */ 
        public function getEstadoLibro()
        {
                return $this->estadoLibro;
        }

        /**
         * Set the value of estadoLibro
         *
         * @return  self
         */ 
        public function setEstadoLibro($estadoLibro)
        {
                $this->estadoLibro = $estadoLibro;

                return $this;
        }
    }
?>