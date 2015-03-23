<?php
class Meeting {
  
  private $pdo;
  
  function Meeting($pdo = null) {
    if ($pdo == null) {
      $this->pdo = (new DB)->pdo;
    } else {
      $this->pdo = $pdo;
    }
  }
  
  function create($params) {
    $sql = "INSERT INTO meetings (owner_id, organ_id, m_date, m_time, local, participants, systems, infra, processes, people) VALUES (1, '" . $params['organ'] . "', '" . $params['date'] . "', '" . $params['time'] . "', '" . $params['local'] . "', '" . $params['participantes'] . "', '" . $params['sistemas'] . "', '" . $params['infraestrutura'] . "', '" . $params['processos'] . "', '" . $params['pessoas'] . "');";
    $this->pdo->prepare($sql)->execute();
    return $sql;
  }
  
  function all($id = 1) {
		$exec = $this->pdo->prepare("SELECT * FROM meetings WHERE owner_id = $id;");
		$exec->execute();
		return $exec->fetchAll();
  }
  
  function delete($id) {
    $sql = "DELETE FROM meetings WHERE id = " . $id . ";";
    $this->pdo->prepare($sql)->execute();
    return $sql;
  }
  
  function find($id) {
    $exec = $this->pdo->prepare("SELECT * FROM meetings WHERE id = $id;");
		$exec->execute();
		return $exec->fetch();
  }
  
  function update($id, $params) {
    $sql = "UPDATE meetings SET organ_id = '" . $params['organ'] . "', m_date = '" . $params['date'] . "', m_time = '" . $params['time'] . "', local = '" . $params['local'] . "', participants = '" . $params['participantes'] . "', systems = '" . $params['sistemas'] . "', infra = '" . $params['infraestrutura'] . "', processes = '" . $params['processos'] . "', people = '" . $params['pessoas'] . "' WHERE id = $id;";
    $this->pdo->prepare($sql)->execute();
    return $sql;
  }
  
}