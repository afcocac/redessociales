<?php

/**
 * Object represents table 'user'
 *
 * @author: http://phpdao.com
 * @date: 2015-04-17 17:34	 
 */
class User {

    var $id;
    var $email;
    var $state;

    function getId() {
        return $this->id;
    }

    function getEmail() {
        return $this->email;
    }

    function getState() {
        return $this->state;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setState($state) {
        $this->state = $state;
    }

}