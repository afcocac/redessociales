<?php

/**
 * Object represents table 'user_social'
 *
 * @author: http://phpdao.com
 * @date: 2015-04-17 17:34	 
 */
class UserSocial {

    var $id;
    var $userId;
    var $socialNetworkId;

    function getId() {
        return $this->id;
    }

    function getUserId() {
        return $this->userId;
    }

    function getSocialNetworkId() {
        return $this->socialNetworkId;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUserId($userId) {
        $this->userId = $userId;
    }

    function setSocialNetworkId($socialNetworkId) {
        $this->socialNetworkId = $socialNetworkId;
    }

}
