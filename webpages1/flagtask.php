<?php
	//setup connection and get taskID, from previous page, and userID for a sql query
	
	if (isset($_POST['confirm']) && isset($_POST['FlagReason'])) {
    if ($_POST['confirm'] == 'Yes') {

	//sql queries and inserts/alters
	//get userID from our task ID
	$taskIDhref = $_GET['task_id'];
	$link = mysqli_connect("localhost", "root", "", "group19");
	$FlagReason =  mysqli_real_escape_string($link, $_REQUEST['FlagReason']);
	
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
	
	//taskownerID is the task owner. We will insert his/her ID into the flaggedtasks table
	//stmt2 inserts a row into the flagged table
	$stmt2 = $dbh->prepare("INSERT INTO flaggedtasks (UserID, TaskID, FlagReason) VALUES ('$taskownerID[0]','$taskIDhref','$FlagReason')");
	
	
	
	//insert the row into flaggedtasks and check
	$inserted = $stmt2->execute();
	if($inserted){
		echo "Row successfully inserted into flaggedtasks. <br></br>";
	}
	
	
	//stmt3 alters the value of the flagstatus attribute in taskstable to 1
	$stmt3 = $dbh-> prepare("UPDATE taskstable SET FlaggedTasks = '1' WHERE TaskID ='$taskIDhref'");
	//insert the row into flaggedtasks and check
	$altered = $stmt3->execute();
	if($altered){
		echo "Flag Status of Task " .$taskIDhref ." successfully updated in taskstable. <br></br>";
	}
	
        header("Location:silverclaimedtasks.php");
    }
    else if ($_POST['confirm'] == 'No' && isset($_POST['FlagReason']) || !isset($_POST['FlagReason'])) {
        header("Location:silvertaskstream.php");
    } 
}
?>