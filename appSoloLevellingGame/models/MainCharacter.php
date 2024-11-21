<?php

require_once("./models/Arma.php");
require_once("./models/Armadura.php");

    // Parte Enzo
    class MainCharacter {
        protected string $nome;
        protected int $vida;
        protected int $stamina;
        protected int $danoAtaque;
        protected Arma $arma;
        protected int $moedasDeOuro;
        protected $classes = array();


        public function __construct($nome, $dano){

                $this->nome = readline("Nome do personagem: ");
                $this->vida = 100;
                $this->stamina = 100;   
                $this->danoAtaque = 10;
                $this->arma = new Arma($nome, $dano);
                $this->moedasDeOuro = 10;

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
        public function getArma()
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

        

        public function calcularDanoAtaque(){

                $this->stamina -= 10;

                return $this->arma->getDano() + $this->danoAtaque;

        }

        public function receberDano($dano) {

                $this->vida -= $dano;
                echo "$this->nome recebeu $dano de dano!\n";
                
        }
    }