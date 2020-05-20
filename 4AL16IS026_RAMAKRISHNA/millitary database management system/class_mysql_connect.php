<?php
 class mysql_connect{
 	public $server;
 	public $dbname;
 	public $username;
 	public $password;
 	function _construct($servername,$dbname,$username,$password){
 		$this->server=$servername;
 		$this->dbname=$dbname;
 		$this->username=$username;
 		$this->password=$password;
 	}
 	public function connect_server(){
 		try{
 			$connection_string=new PDO("mysql:host=$this->server;dbname=$this->dbname,$this->username,$this
 				->password");

 		}
 		catch(PDOException $pe)
 		{
 			die("ERROR OCCURED:".$pe->getMessage());
 	   }
 	   return $connection_string;
 	}
 }
 ?>