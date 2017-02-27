<?php
/**
 * @author Luca
 * definition of the User DAO (database access object)
 */
class UsersDAO {
	private $dbManager;
	function UsersDAO($DBMngr) {
		$this->dbManager = $DBMngr;
	}
	function getUsers() {
		$sql = "SELECT * ";
		$sql .= "FROM users ";
		$sql .= "ORDER BY users.name; ";

		$result = $this->dbManager->executeQuery ( $sql );
		$arrayOfResults = $this->dbManager->fetchResults ( $result );
		return $arrayOfResults;
	}
	function insertUser($p) {
		
		$sql = "INSERT INTO dit.users (name, surname, email, password)";
		$sql .= "VALUES ('$p[name]', '$p[surname]', '$p[email]', '$p[password]');";
		
		var_dump($sql); die();
		$result = $this->dbManager->executeQuery ( $sql );
	
	}
}
	?>
