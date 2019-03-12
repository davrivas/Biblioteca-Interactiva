<?php
    public class Genero {
        private $id;
        private $codigoDewey;
        private $genero;

        public Genero() {
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
         * Get the value of codigoDewey
         */ 
        public function getCodigoDewey()
        {
                return $this->codigoDewey;
        }

        /**
         * Set the value of codigoDewey
         *
         * @return  self
         */ 
        public function setCodigoDewey($codigoDewey)
        {
                $this->codigoDewey = $codigoDewey;

                return $this;
        }

        /**
         * Get the value of genero
         */ 
        public function getGenero()
        {
                return $this->genero;
        }

        /**
         * Set the value of genero
         *
         * @return  self
         */ 
        public function setGenero($genero)
        {
                $this->genero = $genero;

                return $this;
        }
    }
?>