<?php
    // Parte Enzo

    class Monstro {
        protected string $nome;
        protected int $vida;
        protected int $danoAtaque;
        protected int $defesa;
        
        public function __construct($nome, $vida, $danoAtaque) {
                $this->nome = $nome;
                $this->vida = $vida;
                $this->danoAtaque = $danoAtaque;
        }
        
        public function atacar() {
            return "$this->nome atacou causando $this->danoAtaque de dano!";
        }
        
        public function receberDano($dano) {
                $this->vida -= $dano;
        }

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
         * Get the value of defesa
         */
        public function getDefesa(): int
        {
                return $this->defesa;
        }

        /**
         * Set the value of defesa
         */
        public function setDefesa(int $defesa): self
        {
                $this->defesa = $defesa;

                return $this;
        }

    }