<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-04-17 17:34
 */
interface UserSocialDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return UserSocial 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param userSocial primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserSocial userSocial
 	 */
	public function insert($userSocial);
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserSocial userSocial
 	 */
	public function update($userSocial);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryBySocialNetworkId($value);


	public function deleteByUserId($value);

	public function deleteBySocialNetworkId($value);


}
?>