<?php

require_once("./models/MainCharacter.php");

    // Parte Enzo

    class Guerreiro extends MainCharacter {
        protected int $danoEspinhos = 15;

        /**
         * Get the value of danoEspinhos
         */
        public function getDanoEspinhos(): int
        {
                return $this->danoEspinhos;
        }

        /**
         * Set the value of danoEspinhos
         */
        public function setDanoEspinhos(int $danoEspinhos): self
        {
                $this->danoEspinhos = $danoEspinhos;

                return $this;
        }

        public function usarEscudo(){
            
        }

        public function calcularDanoFinal()
        {
                return ($this->calcularDanoAtaque() + $this->danoEspinhos);
        }
    }