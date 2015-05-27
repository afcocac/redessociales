<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-04-17 17:34
 */
interface SocialNetworkDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return SocialNetwork 
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
 	 * @param socialNetwork primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SocialNetwork socialNetwork
 	 */
	public function insert($socialNetwork);
	
	/**
 	 * Update record in table
 	 *
 	 * @param SocialNetwork socialNetwork
 	 */
	public function update($socialNetwork);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByName($value);

	public function queryByState($value);


	public function deleteByName($value);

	public function deleteByState($value);


}
?>