<?php
/* Attempt MySQL server connection.

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "group19");

	if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
	
if(isset($_POST['TaskTags'])){
	$TaskTags = 		  mysqli_real_escape_string($link, $_REQUEST['TaskTags']);
	//<------INSERT SQL QUERY FOR TAGS HERE, IF UPLOADS ARE SUCCESSFUL------->
			$tag_string = $TaskTags;
			$tags = explode(",",$tag_string);
			
			for ($x = 0; $x < count($tags); $x++){

			//Due to unique it will only insert if the tag dosent already exist
			$trimmed_tag = trim($tags[$x]);
			$result1 = mysqli_query($link, "INSERT INTO tagnames (tagname) VALUES('$trimmed_tag')");
						if (!$result1) {
			echo "ERROR: Could not able to execute $result1. " . mysqli_error($link);
										}	
			//Add the relational Link
			$result2 = mysqli_query($link, "INSERT INTO usertags (userID, TagID) VALUES($login_session, (SELECT tagnames.tagid FROM tagnames WHERE tagnames.tagname = '$trimmed_tag'))");
						if (!$result2) {
			echo "ERROR: Could not able to execute $result2. " . mysqli_error($link);
										}	
				}
				echo "Tags successfully added. click Profle to go back.";
				
			}

		

?>