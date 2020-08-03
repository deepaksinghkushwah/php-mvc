<?php

/**
 * Base model class
 */
class Model extends PDO {

    function __construct() {
        parent::__construct(DNS, DB_USER, DB_PASSWORD);
    }

    /**
     * Insert in table 
     * @param type $table Table name must be a string
     * @param type $data You can pass the data you want to update in associative array format
     *
     */
    public function insert($table, $data) {
        ksort($data);
        $fieldNames = implode("`,`", array_keys($data));
        $fieldValues = ':' . implode(", :", array_keys($data));
        $stat = $this->prepare("INSERT INTO $table (`$fieldNames`) values ($fieldValues)");
        foreach ($data as $key => $val) {
            $stat->bindValue(":$key", $val);
        }
        return $stat->execute();
    }

    /**
     * Update table record 
     * @param string $table Table name must be a string
     * @param Array $data You can pass the data you want to update in associative array format
     * @param string $where Where is condition, it should be sting
     */
    public function update($table, $data, $where) {
        ksort($data);
        $fieldDetails = "";
        foreach ($data as $key => $val) {
            $fieldDetails .= "`$key` = :$key,";
        }
        $fieldDetails = rtrim($fieldDetails, ",");


        $stat = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
        foreach ($data as $key => $val) {
            $stat->bindValue(":$key", $val);
        }
        return $stat->execute();
    }

    /**
     * Select records
     * @param string $sql
     * @param array $array
     *  @param const $fetchMode PDO fetch mode
     * @return array
     */
    public function select($sql, $array = [], $fetchMode = PDO::FETCH_ASSOC) {
        $stmt = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $stmt->bindValue("$key", $value);
        }        
        $stmt->execute();
        return $stmt->fetchAll($fetchMode);
    }
    
    /**
     * 
     * @param string $table table name
     * @param string $where condition
     * @param int $limit limit records to delete
     * @return int Affected Rows
     */
    public function delete($table, $where, $limit = 1){
        return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");        
    }

}
