<?php

class DB {

	private $pdo;

	function __construct() {
		if (true) {
			$conn = "pgsql:host=ec2-174-129-197-200.compute-1.amazonaws.com port=5432 user=ldphxungmtlhvu password=te9bZEW2Xhemc8EDFsMQ3VbhZt dbname=dfi2fr0b3mm56t";
		} else {
			$conn = "sqlite:db/database.sqlite3";
		}
    
		$this->pdo = new PDO($conn);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

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
			$sql = "UPDATE infos SET info_value = '" . htmlentities($value) . "' WHERE info_attr = '" . $attr . "' AND instituicao_id = $id;";
      echo $sql;
      $stmt = $this->pdo->prepare($sql)->execute();
      if (!$stmt) {
        echo $stmt->errorInfo();
      }
		}
		
	}

}
?>