<?php
    // Parte Enzo
    class MainCharacter {
        protected string $nome;
        protected int $vida;
        protected int $stamina;
        protected int $danoAtaque;
        protected string $arma;
        protected string $armadura;
        protected int $moedasDeOuro;

        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of vida
         */
        public function getVida(): int
        {
                return $this->vida;
        }

        /**
         * Set the value of vida
         */
        public function setVida(int $vida): self
        {
                $this->vida = $vida;

                return $this;
        }

        /**
         * Get the value of stamina
         */
        public function getStamina(): int
        {
                return $this->stamina;
        }

        /**
         * Set the value of stamina
         */
        public function setStamina(int $stamina): self
        {
                $this->stamina = $stamina;

                return $this;
        }

        /**
         * Get the value of danoAtaque
         */
        public function getDanoAtaque(): int
        {
                return $this->danoAtaque;
        }

        /**
         * Set the value of danoAtaque
         */
        public function setDanoAtaque(int $danoAtaque): self
        {
                $this->danoAtaque = $danoAtaque;

                return $this;
        }

        /**
         * Get the value of arma
         */
        public function getArma(): string
        {
                return $this->arma;
        }

        /**
         * Set the value of arma
         */
        public function setArma(string $arma): self
        {
                $this->arma = $arma;

                return $this;
        }

        /**
         * Get the value of armadura
         */
        public function getArmadura(): string
        {
                return $this->armadura;
        }

        /**
         * Set the value of armadura
         */
        public function setArmadura(string $armadura): self
        {
                $this->armadura = $armadura;

                return $this;
        }

        public function atacar(){

        }
    }