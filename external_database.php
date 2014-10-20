<?php

class External_DB {

	private $pdo;

	function __construct() {
		if (true) {
			//$conn = "pgsql:host=ec2-54-243-51-102.compute-1.amazonaws.com port=5432 user=niurpsxchwaumk password=-zrbVb1_ozeW873MspuU7QnDu3 dbname=dfsfks92h7no6h";
      $conn = "pgsql:host=ec2-54-243-51-102.compute-1.amazonaws.com port=5432 user=niurpsxchwaumk password=-zrbVb1_ozeW873MspuU7QnDu3 dbname=dfsfks92h7no6h";
		} else {
			$conn = "sqlite:db/database.sqlite3";
		}
		$this->pdo = new PDO($conn);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}
  
  function getTable($name) {
    $exec = $this->pdo->prepare("SELECT * FROM $name;");
    $exec->execute();
    return $exec->fetchAll();
  }
  
  function parseTable($text) {
    preg_match('/__TABELA_(.*)__/', $text, $matches);
    if (count($matches) >= 2) {
      $results = $this->getTable($matches[1]);
      $return = '<table border="1" style="border: 2px solid black;" cellpadding="2" cellspacing="2"><tr>';
      // HEADERS
      foreach ($results[0] as $key=>$value) {
        if (!is_numeric($key)) {
          $return .= "<th style=\"background: gray; font-weight: bold;\">$key</th>";
        }
      }
      $return .= "</tr>";
      // ITEMS
      foreach ($results as $result) {
        $return .= "<tr>";
        foreach ($result as $key=>$value) {
          if (!is_numeric($key)) {
            $return .= "<td>$value</td>";
          }
        }
        $return .= "</tr>";
      }
      
      $return .= "</table>";
      
      //return preg_replace('/(__TABELA_(.*)__)/', 'AQUI VAI A TABELA (' . $matches[1] . ')', $text);
      return preg_replace('/(__TABELA_(.*)__)/', $return, $text);
    }
  }
}