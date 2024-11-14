<?php
    // Parte Enzo

    class Arqueiro extends MainCharacter {
        protected int $danoFlecha;

        /**
         * Get the value of danoFlecha
         */
        public function getDanoFlecha(): int
        {
                return $this->danoFlecha;
        }

        /**
         * Set the value of danoFlecha
         */
        public function setDanoFlecha(int $danoFlecha): self
        {
                $this->danoFlecha = $danoFlecha;

                return $this;
        }

        public function atirarFlecha(){
            
        }
    }