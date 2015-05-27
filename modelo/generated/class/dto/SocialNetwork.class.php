<?php

/**
 * Object represents table 'social_network'
 *
 * @author: http://phpdao.com
 * @date: 2015-04-17 17:34	 
 */
class SocialNetwork {

    var $id;
    var $name;
    var $state;

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getState() {
        return $this->state;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setState($state) {
        $this->state = $state;
    }

}