<?php

include_once 'JSONEncode.php';

class FacebookUserData {

    private $user_profile;
    private $contacts;
    private $userActivities;
    private $jsonEncode;

    function __construct($array) {
        $this->user_profile = $array["user_profile"];
        $this->contacts = $array["contacts"];
        $this->userActivities = $array["userActivities"];
        $this->jsonEncode = new JSONEncode();
    }

    function cargarInfo() {
        
        $result = '{';
        $result .=  '"profile": ' . $this->cargarPerfil() . ',';
        $result .=  '"contacts": ' . $this->cargarContactos() . ',';
        $result .=  '"userActivities": ' . $this->cargarActividadesUsuario();
        $result .= '}';
        return $result;
    }

    function cargarPerfil() {
        return $this->jsonEncode->profile($this->user_profile);
    }

    function cargarContactos() {
        return $this->jsonEncode->contacts($this->contacts);
    }

    function cargarActividadesUsuario() {
        return $this->jsonEncode->userActivity($this->userActivities);
    }

}
