<?php
require_once 'simpleDBmanager/DB/DAO/UsersDAO.php';
require_once 'simpleDBmanager/DB/DBManager.php';
$DBMngr = new DBManager();
$usersDAO = new UsersDAO($DBMngr);

//function DisplayUserList(){
$DBMngr->openConnection();
$userList = $usersDAO->getUsers();
// print_r($userList); // ta funkcja pomaga obczaic co sie kryje w zmiennej
if (count($userList) > 0) {
	// output data of each row
	echo "<ul>";
	foreach($userList as $user) {

		echo "<li>"."id: " . $user["id"]. " - Name: " . $user["name"]. " " . $user["surname"].
			" " . $user["email"]." " . $user["password"]. "</li>";
	}
	echo"</ul>";
} else {
	echo "0 results";
}

$DBMngr->closeConnection();
