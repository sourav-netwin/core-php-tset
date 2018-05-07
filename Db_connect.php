<?php
	/**
	*this class is used to handle the database connections
	*
	*@category Db_connect class
	*@author Sourav Dhara
	*@Last Modified : 7th May , 2018
	*/
	class Db_connect
	{
		private $serverName = 'localhost';
		private $userName = 'root';
		private $password = '';
		private $databaseName = 'test';

		/**
		*This function is used to conect the database
		*
		*@access public
		*@param NONE
		*@return mixed
		*/
		public function connect_mysqli()
		{
			try
			{
				$dbConn = new mysqli($this->serverName , $this->userName , $this->password , $this->databaseName);
				if($dbConn->connect_error)
					throw new Exception($dbConn->connect_error);
			}
			catch(Exception $e)
			{
				die('Connection Error : '.$e->getMessage());
			}
			finally
			{
				return $dbConn;
			}
		}
	}
