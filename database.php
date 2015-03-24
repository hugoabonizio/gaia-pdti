<?php

class DB {

	public $pdo;

	function __construct() {
		if (true) {
			//$conn = "pgsql:host=ec2-174-129-197-200.compute-1.amazonaws.com port=5432 user=ldphxungmtlhvu password=te9bZEW2Xhemc8EDFsMQ3VbhZt dbname=dfi2fr0b3mm56t";
      $host = gethostbyname('ec2-174-129-197-200.compute-1.amazonaws.com');
      //$conn = "pgsql:host=$host port=5432 dbname=dfi2fr0b3mm56t";
      $conn = "pgsql:host=127.0.0.1 port=5432 dbname=hugo";
		} else {
			$conn = "sqlite:db/database.sqlite3";
		}
    $s = microtime(true);
		//$this->pdo = new PDO($conn, 'ldphxungmtlhvu', 'te9bZEW2Xhemc8EDFsMQ3VbhZt');
    $this->pdo = new PDO($conn, 'hugo', 'senha123');
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $e = microtime(true);
    //echo $e - $s;
	}

	function loadInfos($id) {
    $result = array();
		$exec = $this->pdo->prepare("SELECT * FROM infos WHERE instituicao_id = $id;");
		$exec->execute();
		foreach ($exec->fetchAll() as $info) {
      $result[$info['info_attr']] = $info['info_value'];
    }
    return $result;
	}

	function update_attributes($id, $attributes) {
		foreach ($attributes as $attr => $value) {
			$sql = "UPDATE infos SET info_value = '" . $value . "' WHERE info_attr = '" . $attr . "' AND instituicao_id = $id;";
      echo $sql;
      $stmt = $this->pdo->prepare($sql)->execute();
      if (!$stmt) {
        echo $stmt->errorInfo();
      }
		}
		
	}

}
?>