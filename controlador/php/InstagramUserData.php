<?php

include_once 'JSONEncode.php';

class InstagramUserData {

    private $user_profile;
    private $jsonEncode;
    

    function __construct($array) {
        $this->user_profile = $array["user_profile"];
        $this->jsonEncode= new JSONEncode();
    }

    function cargarInfo() {
        $result = '{';
        $result .=  '"profile": ' . $this->cargarPerfil();
        $result .= '}';
        return $result;
    }
    
    function cargarPerfil() {
        return $this->jsonEncode->profile($this->user_profile);
    }

}


