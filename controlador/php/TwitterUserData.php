<?php
include_once 'JSONEncode.php';
class TwitterUserData {

    private $user_profile;
    private $contacts;
    private $userActivities;
    private $timelineActivities;
    private $jsonEncode;

    function __construct($array) {
        $this->user_profile = $array["user_profile"];
        $this->contacts = $array["contacts"];
        $this->userActivities = $array["userActivities"];
        $this->timelineActivities = $array["timelineActivities"];
        $this->jsonEncode = new JSONEncode();
    }

    function cargarInfo() {
        $result = '{';
        $result .=  '"profile": ' . $this->cargarPerfil() . ',';
        $result .=  '"contacts": ' . $this->cargarContactos() . ',';
        $result .=  '"userActivities": ' . $this->cargarActividadesUsuario() . ',';
        $result .=  '"timelineActivities": ' . $this->cargarActividadesTimeline();
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
    
    function cargarActividadesTimeline() {
        return $this->jsonEncode->timelineActivity($this->timelineActivities);
    }

}
