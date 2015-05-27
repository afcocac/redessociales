<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-04-17 17:34
 */
interface UserDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return User 
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
 	 * @param user primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param User user
 	 */
	public function insert($user);
	
	/**
 	 * Update record in table
 	 *
 	 * @param User user
 	 */
	public function update($user);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByEmail($value);

	public function queryByState($value);


	public function deleteByEmail($value);

	public function deleteByState($value);


}
?>