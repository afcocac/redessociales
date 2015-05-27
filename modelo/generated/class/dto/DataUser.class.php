<?php

/**
 * Object represents table 'data_user'
 *
 * @author: http://phpdao.com
 * @date: 2015-04-17 17:34	 
 */
class DataUser {

    var $id;
    var $userSocialId;
    var $jsondata;
    var $lasttime;
    var $state;

    function getId() {
        return $this->id;
    }

    function getUserSocialId() {
        return $this->userSocialId;
    }

    function getJsondata() {
        return $this->jsondata;
    }

    function getLasttime() {
        return $this->lasttime;
    }

    function getState() {
        return $this->state;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUserSocialId($userSocialId) {
        $this->userSocialId = $userSocialId;
    }

    function setJsondata($jsondata) {
        $this->jsondata = $jsondata;
    }

    function setLasttime($lasttime) {
        $this->lasttime = $lasttime;
    }

    function setState($state) {
        $this->state = $state;
    }

}