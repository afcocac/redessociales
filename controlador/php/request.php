<?php

//error_reporting(E_ALL);
session_start();

require 'rqClass.php';

if (isset($_SESSION["user_social_id"])) {


    onLoad();
}

function onLoad() {

    $afArray = array(
        "user_social_id" => ( isset($_SESSION["user_social_id"]) ) ? $_SESSION["user_social_id"] : -3,
        "provider" => ( isset($_SESSION["provider"]) ) ? $_SESSION["provider"] : -3
    );

    $rq = new rqClass($afArray);
    $rq->onLoad();
    unset($rq);
}
