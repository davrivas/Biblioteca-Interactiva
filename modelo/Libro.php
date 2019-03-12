<?php
    public class Libro {
            private $id;
            private $titulo;
            private $autor;
            private $anioPublicacion;
            private $urlArchivo;
            private $urlImagen;
            private $altImagen;
            private $fechaSubida;
            private $usuario;
            private $estadoLibro;
            private $genero;

            public Libro() {                    
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
             * Get the value of titulo
             */ 
            public function getTitulo()
            {
                        return $this->titulo;
            }

            /**
             * Set the value of titulo
             *
             * @return  self
             */ 
            public function setTitulo($titulo)
            {
                        $this->titulo = $titulo;

                        return $this;
            }

            /**
             * Get the value of autor
             */ 
            public function getAutor()
            {
                        return $this->autor;
            }

            /**
             * Set the value of autor
             *
             * @return  self
             */ 
            public function setAutor($autor)
            {
                        $this->autor = $autor;

                        return $this;
            }

            /**
             * Get the value of anioPublicacion
             */ 
            public function getAnioPublicacion()
            {
                        return $this->anioPublicacion;
            }

            /**
             * Set the value of anioPublicacion
             *
             * @return  self
             */ 
            public function setAnioPublicacion($anioPublicacion)
            {
                        $this->anioPublicacion = $anioPublicacion;

                        return $this;
            }

            /**
             * Get the value of urlArchivo
             */ 
            public function getUrlArchivo()
            {
                        return $this->urlArchivo;
            }

            /**
             * Set the value of urlArchivo
             *
             * @return  self
             */ 
            public function setUrlArchivo($urlArchivo)
            {
                        $this->urlArchivo = $urlArchivo;

                        return $this;
            }

            /**
             * Get the value of urlImagen
             */ 
            public function getUrlImagen()
            {
                        return $this->urlImagen;
            }

            /**
             * Set the value of urlImagen
             *
             * @return  self
             */ 
            public function setUrlImagen($urlImagen)
            {
                        $this->urlImagen = $urlImagen;

                        return $this;
            }

            /**
             * Get the value of altImagen
             */ 
            public function getAltImagen()
            {
                        return $this->altImagen;
            }

            /**
             * Set the value of altImagen
             *
             * @return  self
             */ 
            public function setAltImagen($altImagen)
            {
                        $this->altImagen = $altImagen;

                        return $this;
            }

            /**
             * Get the value of fechaSubida
             */ 
            public function getFechaSubida()
            {
                        return $this->fechaSubida;
            }

            /**
             * Set the value of fechaSubida
             *
             * @return  self
             */ 
            public function setFechaSubida($fechaSubida)
            {
                        $this->fechaSubida = $fechaSubida;

                        return $this;
            }

            /**
             * Get the value of usuario
             */ 
            public function getUsuario()
            {
                        return $this->usuario;
            }

            /**
             * Set the value of usuario
             *
             * @return  self
             */ 
            public function setUsuario($usuario)
            {
                        $this->usuario = $usuario;

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