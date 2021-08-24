<?php

/**
 * 
 */
class DbConnection
{
	private $_host = '127.0.0.1';
	private $_dbName = 'new_rh';
	private $_username = 'root';
	private $_passwd = 'root';
	private $_options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET lc_time_names = 'fr_FR'",
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	);

	protected function dbConnect()
	{
		$pdo = new PDO('mysql:host='.$this->_host.';dbname='.$this->_dbName.';charset=utf8', $this->_username, $this->_passwd, $this->_options);
		return $pdo;
	}
}