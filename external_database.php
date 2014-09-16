<?php

class External_DB {

	private $pdo;

	function __construct() {
		if (true) {
			$conn = "pgsql:host=ec2-54-243-51-102.compute-1.amazonaws.com port=5432 user=niurpsxchwaumk password=-zrbVb1_ozeW873MspuU7QnDu3 dbname=dfsfks92h7no6h";
		} else {
			$conn = "sqlite:db/database.sqlite3";
		}
		$this->pdo = new PDO($conn);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}