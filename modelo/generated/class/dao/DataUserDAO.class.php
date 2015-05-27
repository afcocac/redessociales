<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-04-17 17:34
 */
interface DataUserDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DataUser 
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
 	 * @param dataUser primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DataUser dataUser
 	 */
	public function insert($dataUser);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DataUser dataUser
 	 */
	public function update($dataUser);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserSocialId($value);

	public function queryByJsondata($value);

	public function queryByLasttime($value);

	public function queryByState($value);


	public function deleteByUserSocialId($value);

	public function deleteByJsondata($value);

	public function deleteByLasttime($value);

	public function deleteByState($value);


}
?>