<?php
    // Parte Enzo
    
    class Mago extends MainCharacter {
        protected int $danoMagico;

        /**
         * Get the value of danoMagico
         */
        public function getDanoMagico(): int
        {
                return $this->danoMagico;
        }

        /**
         * Set the value of danoMagico
         */
        public function setDanoMagico(int $danoMagico): self
        {
                $this->danoMagico = $danoMagico;

                return $this;
        }

        public function lancarFeitico(){

        }
    }