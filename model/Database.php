<?php
require_once 'Config.php';

/**
* Database
*/

class Database extends Config
{
	private static $db = null;
		
	function __construct() {
		if ( null == self::$db ) { 
			try { 
				self::$db = new PDO( "mysql:host=".$this->hostname.";"."dbname=".$this->dbname, $this->username, $this->password); 
			}
			catch(PDOException $e) { 
				die($e->getMessage()); 
				echo 'Erreur de connexion : ' . $e->getMessage();
    		}
   		}
   		return self::$db;
	}

	static function select($select = array(), $from = array(), $where = array(), $order = array(), $direction = "", $limit = 20) {
		$sql = "SELECT ";
		$i = 1;
		foreach($select as $value) {
			$sql .= "`".$value."`";
			if(count($select) != $i) {
				$sql .= " , ";
			}
			$i++;
		}
		$sql .= " FROM ";
		$i = 1;
		foreach($from as $value){
			$sql .= "`".$value."`";
			if(count($from) != $i) {
				$sql .= " , ";
			}
			$i++;
		}
		$sql .= " WHERE ";
		if(!empty($where)) {
			$i = 1;
			foreach($where as $key => $value) {
				$sql .= "`".$key."` = ".$value;
				if (count($where) != $i) {
					$sql .= " AND ";
				}
				$i++;
			}
		}
		else {
			$sql .= "1";
		}
		if(!empty($order)) {
			$sql .= " ORDER BY ";
			$i = 1;
			foreach($order as $value) {
				$sql .= "`".$value."`";
				if(count($order) != $i) {
					$sql .= " AND ";
				}
				$i++;
			}
			
		}
		if(!empty($direction)) {
			$sql .= " ".$direction;
		}
		$sql .= " LIMIT ".$limit;
		
		$result = self::$db->query($sql);
		//var_dump($sql);die; 
		return ($result == null || $result == "") ? null : $result->fetchAll(PDO::FETCH_ASSOC);
    }

	static function insert($insert = array(), $table = "")
	{
		$sql = "INSERT INTO `".$table."` (";
		$i = 1;
		foreach($insert as $key => $value){
			$sql .= "`".$key."`";
			if (count($insert) != $i) {
				$sql .= " , ";
			}
			$i++;
		}
		$sql .= ") VALUES (";
		$i = 1;
		foreach($insert as $key => $value){
			$sql .= $value;
			if (count($insert) != $i) {
				$sql .= " , ";
			}
			$i++;
		}
		$sql .= ")";
		$result = self::$db->query($sql);
		// var_dump($sql);die;
		return ($result == null || $result == "") ? null : self::$db->lastInsertId();
	}
	
	static function update($update = array(), $table = "", $where = array())
	{
		$sql = "UPDATE `".$table."` SET ";
		$i = 1;
		foreach($update as $key => $value){
			$sql .= "`".$key."` = ".$value;
			if (count($update) != $i) {
				$sql .= " , ";
			}
			$i++;
		}
		$sql .= " WHERE ";
		$i = 1;
		foreach($where as $key => $value){
			$sql .= "`".$key."` = ".$value;
			if (count($where) != $i) {
				$sql .= " , ";
			}
			$i++;
		}
		$result = self::$db->query($sql);

		return ($result == null || $result == "") ? null : true;
	}
	
	static function delete($table = "", $where = array())
	{
		$sql = "DELETE FROM `".$table."` WHERE ";
		$i = 1;
		foreach($where as $key => $value){
			$sql .= "`".$key."` = ".$value;
			if (count($where) != $i)
				$sql .= " , ";
			$i++;
		}
		$result = self::$db->query($sql);

		return ($result == null || $result == "") ? null : true;
	}

	function __destruct(){
		self::$db = null;
	}
	
}