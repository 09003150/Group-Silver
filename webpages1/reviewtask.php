<?php
	//setup connection and get taskID, from previous page, and userID for a sql query
	
	if (isset($_POST['confirm'])) {
    if ($_POST['confirm'] == 'Satisfied') {

	//sql queries and inserts/alters
	//get userID from our task ID
	$taskIDhref = $_GET['task_id'];
	
	//Custom PDO options.
	$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
	);

	$dbh = new PDO("mysql:host=localhost;dbname=group19", "root", "",$options);
	$stmt1= $dbh->prepare("SELECT ClaimID FROM claimedtasks WHERE taskID ='$taskIDhref'");
	$stmt1->execute();
	//this is the claimant of the task.
	$taskclaimantID = $stmt1->fetch();
	
	//ClaimID is the task claimant. We will get his/her ID from the login session
	//stmt2 updates the userpoints of the task claimant 
	$stmt2 = $dbh->prepare("UPDATE usertable SET userpoints = userpoints + 5 WHERE userID ='$taskclaimantID[0]'");
	
$pointsadded = $stmt2->execute();
//update the usertable row and check	
	if($pointsadded){
		echo "StatusID of Task " .$taskIDhref ." successfully updated in taskstable. 5 reputation points added to the task claimant.<br></br>";
	}
	
	
    }
    else if ($_POST['confirm'] == 'Dissatisfied') {
			//sql queries and inserts/alters
	//get userID from our task ID
	$taskIDhref = $_GET['task_id'];
	
	//Custom PDO options.
	$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
	);

	$dbh = new PDO("mysql:host=localhost;dbname=group19", "root", "",$options);
	$stmt1= $dbh->prepare("SELECT ClaimID FROM claimedtasks WHERE taskID ='$taskIDhref'");
	$stmt1->execute();
	//this is the claimant of the task.
	$taskclaimantID = $stmt1->fetch();
	
	//ClaimID is the task claimant. We will get his/her ID from the previous statement
	//stmt2 updates the userpoints of the task claimant 
	$stmt2 = $dbh->query("UPDATE usertable SET userpoints = userpoints - 5 WHERE userID ='$taskclaimantID[0]'");
	
	//update teh usertable row and check
	$pointsdeducted = $stmt2->execute();
	if($pointsdeducted){
		echo "StatusID of Task " .$taskIDhref ." successfully updated in taskstable.  5 reputation points deducted from the task claimant.<br></br>";
	}
		
    } 
}
?>