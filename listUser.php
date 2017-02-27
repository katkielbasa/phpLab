<?php
require_once 'simpleDBmanager/DB/DAO/UsersDAO.php';
require_once 'simpleDBmanager/DB/DBManager.php';
$DBMngr = new DBManager();
$usersDAO = new UsersDAO($DBMngr);

//function DisplayUserList(){
$userList = $usersDAO->getUsers();
if (mysqli_num_rows($result) > 0) {
	// output data of each row
	echo "<ul>";
	while($row = mysqli_fetch_assoc($result)) {
			
		echo "<ol>"."id: " . $row["users.id"]. " - Name: " . $row["users.name"]. " " . $row["users.surname"].
			" " . $row["users.email"]." " . $row["users.password"]. "</ol>";
	}
	echo"</ul>";
} else {
	echo "0 results";
	//	}

}
