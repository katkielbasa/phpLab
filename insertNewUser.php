

<html>
<body>

<?php
if(!isset($_GET["name"], $_GET["surname"], $_GET["email"], $_GET["password"])) {
  die("A required variable is not set");
}
?>

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
	// if (! empty ($userRecord))
	$DBMngr->openConnection();
	$usersDAO->insertUser($userRecord);
	$DBMngr->closeConnection();

	//}

	?>
