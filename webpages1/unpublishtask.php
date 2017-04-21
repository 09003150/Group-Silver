<?php
	//Get the taskID
	$taskIDhref = $_GET['task_id'];
	//setup connection and get taskID, from previous page, and userID for a sql query
	
	if (isset($_POST['confirm'])) {
    if ($_POST['confirm'] == 'Yes') {

	//sql queries and inserts/alters
	//get userID from our task ID
	$taskIDhref = $_GET['task_id'];
	
	//Custom PDO options.
	$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
	);

	$dbh = new PDO("mysql:host=localhost;dbname=group19", "root", "",$options);
	$stmt1= $dbh->prepare("SELECT UserID FROM taskstable WHERE taskID ='$taskIDhref'");
	$stmt1->execute();
	//this is the creator of the task.
	$taskownerID = $stmt1->fetch();
	
	//ClaimID is the task claimant. We will get his/her ID from the login session
	//stmt2 deletes the relevant row in the claimedtasks table
	$stmt2 = $dbh->prepare("DELETE FROM claimedtasks where TaskID = '$taskIDhref'");
	
	
	
	//insert the row into claimedtasks and check
	$deleted = $stmt2->execute();
	if($deleted){
		echo "Row successfully deleted in claimedtasks. <br></br>";
	}
	
	
	//stmt3 alters the value of the statusID attribute in taskstable to Unpublished
	$stmt3 = $dbh-> prepare("UPDATE taskstable SET StatusID = '7' WHERE TaskID ='$taskIDhref'");
	//insert the row into claimedtasks and check
	$altered = $stmt3->execute();
	if($altered){
		echo "StatusID of Task " .$taskIDhref ." successfully updated in taskstable. <br></br>";
	}
	
        header("Location:silverprofile.php");
    }
    else if ($_POST['confirm'] == 'No') {
        header("Location:silverprofile.php");
    } 
}
?>