<?php
	//setup connection and get taskID, from previous page, and userID for a sql query
	
	if (isset($_POST['confirm'])) {
    if ($_POST['confirm'] == 'Yes') {

	//sql queries and inserts/alters
	//get userID from our task ID
	$userIDhref = $_GET['user_id'];
	
	//Custom PDO options.
	$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
	);

	$dbh = new PDO("mysql:host=localhost;dbname=group19", "root", "",$options);
	$stmt1= $dbh->prepare("UPDATE usertable SET banstatus = '1' WHERE userID ='$userIDhref'");
	$banned = $stmt1->execute();
	if($banned){
		echo "User " .$userIDhref ." has been successfully banned. <br></br>";
	}
	
	//We need a second statement to get the email from usertable
	$stmt2 = $dbh->prepare("SELECT useremail FROM usertable WHERE userID ='$userIDhref'");
	$stmt2->execute();
	$selected = $stmt2->fetch();
	
	
	//insert the email into bannedemails
	$stmt3 = $dbh->prepare("INSERT INTO bannedemails (bannedemails) VALUES ('$selected[0]')");
	
    }
    else if ($_POST['confirm'] == 'No') {
        header("Location:silverprofile.php");
    } 
}
?>