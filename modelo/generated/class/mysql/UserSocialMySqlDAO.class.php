<?php

/**
 * Class that operate on table 'user_social'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-04-17 17:34
 */
class UserSocialMySqlDAO implements UserSocialDAO {

    /**
     * Get Domain object by primry key
     *
     * @param String $id primary key
     * @return UserSocialMySql 
     */
    public function load($id) {
        $sql = 'SELECT * FROM user_social WHERE id = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($id);
        return $this->getRow($sqlQuery);
    }

    /**
     * Get all records from table
     */
    public function queryAll() {
        $sql = 'SELECT * FROM user_social';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    /**
     * Get all records from table
     */
    public function queryByUserAndSocialNetwork($user_id, $social_network_id) {
        $sql = 'SELECT * FROM user_social WHERE user_id = ? AND social_network_id = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($user_id);
        $sqlQuery->setNumber($social_network_id);
        return $this->getList($sqlQuery);
    }

    /**
     * Get all records from table ordered by field
     *
     * @param $orderColumn column name
     */
    public function queryAllOrderBy($orderColumn) {
        $sql = 'SELECT * FROM user_social ORDER BY ' . $orderColumn;
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    /**
     * Delete record from table
     * @param userSocial primary key
     */
    public function delete($id) {
        $sql = 'DELETE FROM user_social WHERE id = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($id);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Insert record to table
     *
     * @param UserSocialMySql userSocial
     */
    public function insert($userSocial) {
        $sql = 'INSERT INTO user_social (user_id, social_network_id) VALUES (?, ?)';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->setNumber($userSocial->userId);
        $sqlQuery->setNumber($userSocial->socialNetworkId);

        $id = $this->executeInsert($sqlQuery);
        $userSocial->id = $id;
        return $id;
    }

    /**
     * Update record in table
     *
     * @param UserSocialMySql userSocial
     */
    public function update($userSocial) {
        $sql = 'UPDATE user_social SET user_id = ?, social_network_id = ? WHERE id = ?';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->setNumber($userSocial->userId);
        $sqlQuery->setNumber($userSocial->socialNetworkId);

        $sqlQuery->setNumber($userSocial->id);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Delete all rows
     */
    public function clean() {
        $sql = 'DELETE FROM user_social';
        $sqlQuery = new SqlQuery($sql);
        return $this->executeUpdate($sqlQuery);
    }

    public function queryByUserId($value) {
        $sql = 'SELECT * FROM user_social WHERE user_id = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function queryBySocialNetworkId($value) {
        $sql = 'SELECT * FROM user_social WHERE social_network_id = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function deleteByUserId($value) {
        $sql = 'DELETE FROM user_social WHERE user_id = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteBySocialNetworkId($value) {
        $sql = 'DELETE FROM user_social WHERE social_network_id = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Read row
     *
     * @return UserSocialMySql 
     */
    protected function readRow($row) {
        $userSocial = new UserSocial();

        $userSocial->id = $row['id'];
        $userSocial->userId = $row['user_id'];
        $userSocial->socialNetworkId = $row['social_network_id'];

        return $userSocial;
    }

    protected function getList($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);
        $ret = array();
        for ($i = 0; $i < count($tab); $i++) {
            $ret[$i] = $this->readRow($tab[$i]);
        }
        return $ret;
    }

    /**
     * Get row
     *
     * @return UserSocialMySql 
     */
    protected function getRow($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);
        if (count($tab) == 0) {
            return null;
        }
        return $this->readRow($tab[0]);
    }

    /**
     * Execute sql query
     */
    protected function execute($sqlQuery) {
        return QueryExecutor::execute($sqlQuery);
    }

    /**
     * Execute sql query
     */
    protected function executeUpdate($sqlQuery) {
        return QueryExecutor::executeUpdate($sqlQuery);
    }

    /**
     * Query for one row and one column
     */
    protected function querySingleResult($sqlQuery) {
        return QueryExecutor::queryForString($sqlQuery);
    }

    /**
     * Insert row to table
     */
    protected function executeInsert($sqlQuery) {
        return QueryExecutor::executeInsert($sqlQuery);
    }

}

?>