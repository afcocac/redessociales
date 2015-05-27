<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/DataUserDAO.class.php');
	require_once('class/dto/DataUser.class.php');
	require_once('class/mysql/DataUserMySqlDAO.class.php');
	require_once('class/mysql/ext/DataUserMySqlExtDAO.class.php');
	require_once('class/dao/SocialNetworkDAO.class.php');
	require_once('class/dto/SocialNetwork.class.php');
	require_once('class/mysql/SocialNetworkMySqlDAO.class.php');
	require_once('class/mysql/ext/SocialNetworkMySqlExtDAO.class.php');
	require_once('class/dao/UserDAO.class.php');
	require_once('class/dto/User.class.php');
	require_once('class/mysql/UserMySqlDAO.class.php');
	require_once('class/mysql/ext/UserMySqlExtDAO.class.php');
	require_once('class/dao/UserSocialDAO.class.php');
	require_once('class/dto/UserSocial.class.php');
	require_once('class/mysql/UserSocialMySqlDAO.class.php');
	require_once('class/mysql/ext/UserSocialMySqlExtDAO.class.php');

?>