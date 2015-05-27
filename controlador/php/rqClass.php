<?php

require_once ('../../modelo/generated/include_dao.php');

class rqClass {

    private $ar;

    function __construct($array) {
        $this->ar = $array;
    }

    function onLoad() {

        $dataUserMySqlDAO = new DataUserMySqlDAO();
        $array = $dataUserMySqlDAO->queryByUserSocialIdLast($this->ar["user_social_id"]);

        if (count($array) > 0) {
            $dataUser = $array[0];
            echo $dataUser->jsondata;
        } 
    }

}
