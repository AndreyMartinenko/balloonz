<?php

class Db
{
// try to use _construct Method for create PDO connection to DB


	// protected $db;
    // public function __construct() {
    //     $config = require 'application/config/db.php';
    //     $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].'', $config['user'], $config['password']);
    
	
	public static function getConnection()
	{
		$paramsPath = ROOT . '/config/db.php';
		$params = include($paramsPath);


		$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
		$db = new PDO($dsn, $params['user'], $params['password']);
		$db->exec("set names utf8");

		return $db;
	}





}