<?php
    // Parte Enzo

    class Guerreiro extends MainCharacter {
        protected int $danoEspinhos;

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
    }