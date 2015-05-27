<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return DataUserDAO
	 */
	public static function getDataUserDAO(){
		return new DataUserMySqlExtDAO();
	}

	/**
	 * @return SocialNetworkDAO
	 */
	public static function getSocialNetworkDAO(){
		return new SocialNetworkMySqlExtDAO();
	}

	/**
	 * @return UserDAO
	 */
	public static function getUserDAO(){
		return new UserMySqlExtDAO();
	}

	/**
	 * @return UserSocialDAO
	 */
	public static function getUserSocialDAO(){
		return new UserSocialMySqlExtDAO();
	}


}
?>