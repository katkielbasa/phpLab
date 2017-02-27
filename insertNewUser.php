

<html>
<body>

Name:
<?php echo $_GET["name"]or die("Name has not been given"); ?>
<br>
Surname:
<?php echo $_GET["surname"]or die("Surname has not been given"); ?>
<br>
Email:
<?php echo $_GET["email"]or die("Email has not been given"); ?>
<br>
Password:
<?php echo $_GET["password"]or die("Email has not been given"); ?>
<br>
</body>
</html>
<?php
require_once 'simpleDBmanager/DB/DAO/UsersDAO.php';
require_once 'simpleDBmanager/DB/DBManager.php';
$DBMngr = new DBManager();
$usersDAO = new UsersDAO($DBMngr);
$userRecord = array("name"=>$_GET["name"],
				 	"surname"=>$_GET["surname"],
				 	"email"=>$_GET["email"],
					"password"=>$_GET["password"]);
//function storeInDB (){
	if (! empty ($userRecord))
	$DBMngr->openConnection();
	$usersDAO->insertUser($userRecord);
	$DBMngr->closeConnection();
	
	//}

	?>
