<?php

    class db{

        private $host = '127.0.0.1';
        private $usuario = 'root';
        private $senha = '';
        private $database = 'cadastro';

        public function conecta_mysql(){

         $con = mysqli_connect($this->$host,$this->$usuario,$this->$senha,$this->$database);   

         return $con;



        } 



    }









?>