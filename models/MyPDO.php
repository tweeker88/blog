<?php

class MyPDO extends PDO{

}
	 $driver = 'mysql';
	 $host = 'localhost';
	 $schema = 'blog';
	 $username = 'root';
	 $password = '';
	 $dns = $driver.':host='.$host.';dbname='.$schema; 

	 try{
	 	$db = new MyPDO($dns,$username, $password);
	 	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->exec("set names utf8");
	 }
	 catch(PDOException $e) {
		echo $e->getMessage();
	}
