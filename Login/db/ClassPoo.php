<?php

    class Loguin{
        public $user="";
        public $password="";
        public $use="pedro@gmail.com";
        public $pass="123";
        public $cadena="true";
        public $cadena2="false";

        function entrarDatos($variable1,$variable2){
            $this->user = $variable1;
            $this->password= $variable2;
        }

        function Loguear(){
            $us = $this->use;
            $ps = $this->pass;

            $us1 = $this->user;
            $pas1 = $this->password;

            if(($us === $us1) && ($ps === $pas1)){
                return $this->cadena;
            }
            else{
                return $this->cadena2;
            }
        }
    }
?>