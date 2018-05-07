<?php
	/**
	*This class is used to manage all common database related operations
	*
	*@category Commonfunction_model.php
	*@author Sourav Dhara
	*Last Modified : 7th May , 2018
	*/
	class Commonfunction_model extends Db_connect
	{
		private $db;
		//This is the constructor
		public function __construct()
		{
			$this->db = $this->connect_mysqli();
		}

		/**
		*This function is used to get the data to show in the listing page
		*
		*@access protected
		*@param String $selectStr : The select column name
		*@param String $whereCondition : The where condition
		*@param String $tableName : The database table name
		*@param String $returnType : if 1 : return only one record else return all the records
		*@return Array
		*/
		protected function getData($selectStr = '*' , $whereCondition = NULL , $tableName = NULL , $returnType = 1)
		{
			$returnArr = array();
			$sqlStr = 'select '.$selectStr.' FROM '.$tableName;
			if($whereCondition != '')
				$sqlStr.= ' WHERE '.$whereCondition;
			$query = $this->db->query($sqlStr);
			while($row = $query->fetch_assoc())
				$returnArr[] = $row;
			return ($returnType == 1) ? $returnArr[0] : $returnArr;
		}

		/**
		*This function is used to add data in the database
		*
		*@access protected
		*@param String $tableName : Table name
		*@param Array $data : The data need to insert
		*@return Array
		*/
		protected function insertData($tableName = NULL , $data = array())
		{
			$sqlStr = 'insert into '.$tableName.' ('.implode(',' , array_keys($data)).') values ('.implode(',' , array_map(function($val){return "'".$val."'";} , $data)).')';
			return $this->db->query($sqlStr);
		}
	}