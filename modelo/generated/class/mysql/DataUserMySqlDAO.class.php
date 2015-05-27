<?php
/**
 * Class that operate on table 'data_user'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-04-17 17:34
 */
class DataUserMySqlDAO implements DataUserDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DataUserMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM data_user WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM data_user';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM data_user ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
        
        
        
	
	/**
 	 * Delete record from table
 	 * @param dataUser primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM data_user WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DataUserMySql dataUser
 	 */
	public function insert($dataUser){
		$sql = 'INSERT INTO data_user (user_social_id, jsondata, lasttime, state) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($dataUser->userSocialId);
		$sqlQuery->set($dataUser->jsondata);
		$sqlQuery->set($dataUser->lasttime);
		$sqlQuery->setNumber($dataUser->state);

		$id = $this->executeInsert($sqlQuery);	
		$dataUser->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DataUserMySql dataUser
 	 */
	public function update($dataUser){
		$sql = 'UPDATE data_user SET user_social_id = ?, jsondata = ?, lasttime = ?, state = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($dataUser->userSocialId);
		$sqlQuery->set($dataUser->jsondata);
		$sqlQuery->set($dataUser->lasttime);
		$sqlQuery->setNumber($dataUser->state);

		$sqlQuery->setNumber($dataUser->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM data_user';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserSocialId($value){
		$sql = 'SELECT * FROM data_user WHERE user_social_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByJsondata($value){
		$sql = 'SELECT * FROM data_user WHERE jsondata = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLasttime($value){
		$sql = 'SELECT * FROM data_user WHERE lasttime = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByState($value){
		$sql = 'SELECT * FROM data_user WHERE state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}
        
        public function queryByUserSocialIdLast($value){
		$sql = 'SELECT * FROM data_user WHERE lasttime = (SELECT MAX(lasttime) FROM data_user WHERE user_social_id = ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserSocialId($value){
		$sql = 'DELETE FROM data_user WHERE user_social_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByJsondata($value){
		$sql = 'DELETE FROM data_user WHERE jsondata = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLasttime($value){
		$sql = 'DELETE FROM data_user WHERE lasttime = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByState($value){
		$sql = 'DELETE FROM data_user WHERE state = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DataUserMySql 
	 */
	protected function readRow($row){
		$dataUser = new DataUser();
		
		$dataUser->id = $row['id'];
		$dataUser->userSocialId = $row['user_social_id'];
		$dataUser->jsondata = $row['jsondata'];
		$dataUser->lasttime = $row['lasttime'];
		$dataUser->state = $row['state'];

		return $dataUser;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return DataUserMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>