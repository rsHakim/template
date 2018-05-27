<?php

namespace Controller;

use PDO;

class Database extends PDO
{
	private $hostname = 'localhost';
	private $username = 'root';
	private $password = '';
	private $dbname   = 'latihan5';

	public function __construct()
	{
		parent::__construct(
			'mysql:host='.$this->hostname. ';dbname='.$this->dbname, $this->username, $this->password
		);

		\Cloudinary::config(array( 
		  "cloud_name" => "risman99", 
		  "api_key" => "775546149389642", 
		  "api_secret" => "JtKsDFCgl616TRcfGgRdMrxBHkE" 
		));
	}

}