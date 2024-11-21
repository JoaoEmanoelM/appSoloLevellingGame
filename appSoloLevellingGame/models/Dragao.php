<?php

require_once("./models/Monstro.php");

    // Parte Enzo

    class Dragao extends Monstro {
        public function voar(){

        }

        public function cuspirFogo(){
            return "O Dragão cuspiu fogo!";
        }
    }