<?php
class Organ {
  
  private $pdo;
  
  function Organ($pdo = null) {
    if ($pdo == null) {
      $this->pdo = (new DB)->pdo;
    } else {
      $this->pdo = $pdo;
    }
  }
  
  function create($params) {
    $sql = "INSERT INTO organs (owner_id, name, description) VALUES (1, '" . $params['name'] . "', '" . $params['description'] . "');";
    $this->pdo->prepare($sql)->execute();
    return $sql;
  }
  
  function all($id = 1) {
    $result = array();
		$exec = $this->pdo->prepare("SELECT * FROM organs WHERE owner_id = $id;");
		$exec->execute();
		return $exec->fetchAll();
  }
  
  function delete($id) {
    $sql = "DELETE FROM organs WHERE id = " . $id . ";";
    $this->pdo->prepare($sql)->execute();
    return $sql;
  }
  
}