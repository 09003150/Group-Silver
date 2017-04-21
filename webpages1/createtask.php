<?php

    /* Attempt MySQL server connection.

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "group19");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
	
	if (isset($_POST['TaskTitle']) && isset($_POST['TaskTags']) && isset($_POST['TaskNoPages']) && isset($_POST['TaskWordCount']) && isset($_POST['TaskFileFormat']) && isset($_POST['TaskDesc'])&& isset($_POST['ClaimDeadline'])&& isset($_POST['SubmissionDeadline'])&& isset($_POST['TaskType'])) {

	//change date inputs to be accepted by mysql
	$date1 = strtr($_REQUEST['ClaimDeadline'], '/', '-');
	$claim_date = date('Y-m-d', strtotime($date1));
	
	$date2 = strtr($_REQUEST['SubmissionDeadline'], '/', '-');
	$subm_date = date('Y-m-d', strtotime($date2));
    // Escape user inputs for security

    $UserID =             $login_session;
	$TaskTitle =          mysqli_real_escape_string($link, $_REQUEST['TaskTitle']);
	$TaskNoPages =        mysqli_real_escape_string($link, $_REQUEST['TaskNoPages']);
	$TaskWordCount =      mysqli_real_escape_string($link, $_REQUEST['TaskWordCount']);
	$TaskFileFormat =     mysqli_real_escape_string($link, $_REQUEST['TaskFileFormat']);
    $TaskDesc =           mysqli_real_escape_string($link, $_REQUEST['TaskDesc']);
	//$ClaimDeadline =      mysqli_real_escape_string($link, $_REQUEST['ClaimDeadline']);
	//$SubmissionDeadline = mysqli_real_escape_string($link, $_REQUEST['SubmissionDeadline']);
	$TaskType =           mysqli_real_escape_string($link, $_REQUEST['TaskType']);
	$TaskFileFormat =     mysqli_real_escape_string($link, $_REQUEST['TaskFileFormat']);
	$TaskTags = 		  mysqli_real_escape_string($link, $_REQUEST['TaskTags']);
	//<------INSERT ESCAPE CHARACTERS FOR TAGS HERE------->
	


    // attempt insert query execution
	
    $sql = "INSERT INTO taskstable (UserID, TaskTitle, TaskNoPages, TaskWordCount, TaskFileFormat, TaskDesc, ClaimDeadline,  SubmissionDeadline, TaskType, FlaggedTasks, StatusID)
	VALUES ('$UserID', '$TaskTitle', '$TaskNoPages', '$TaskWordCount', '$TaskFileFormat', '$TaskDesc', '$claim_date', '$subm_date', '$TaskType', '0', '1')";
	
	
	
   if(mysqli_query($link, $sql)){
		//This copies the primary key of the table just created, which is the taskid (auto incremented)
		$last_id = mysqli_insert_id($link);
		
        echo "Records Uploaded successfully.<br></br>";
		if(isset($_POST["submit"])) {
		
		//organising directory path for new mainfile
		$temp = explode(".", $_FILES["mainfile"]["name"]);
		$newmainfilename = $last_id . '.' . end($temp);
		
		//organising directory path for new previewfile
		$temp2 = explode(".", $_FILES["previewfile"]["name"]);
		$newpreviewfilename = $last_id . '.' . end($temp2);
		
    
		//    <!-----Mainfile checks----->
		$uploadOk = 1;
		$imageFileType = pathinfo(basename($_FILES["mainfile"]["name"]),PATHINFO_EXTENSION);

		// Check file size
		if ($_FILES["mainfile"]["size"] > 500000) {
			echo "Sorry, your file is too large.<br></br>";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "rtf" && $imageFileType != "txt" ) {
			echo "Sorry, only DOC, DOCX, RTF & TXT files are allowed., The file you uploaded is a " . $imageFileType . "file. <br></br>";
			$uploadOk = 0;
		}
				//Make sure filetypes match
		if($imageFileType != $TaskFileFormat) {
			echo "Sorry, Filetype does not match selected filetype.<br></br>";
			$uploadOk = 0;
		}
		
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.<br></br>";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["mainfile"]["tmp_name"], "mainfile_uploads/" . $newmainfilename)) {
				echo "The file ". basename( $_FILES["mainfile"]["name"]). " has been uploaded as Task " .$last_id . ".<br></br>";
			} else {
				echo "Sorry, there was an error uploading your file.<br></br>";
				
			}
		}
		
		

		//    <!-----previewfile checks----->
		$puploadOk=1;
		$imageFileType2 = pathinfo(basename($_FILES["previewfile"]["name"]),PATHINFO_EXTENSION);

		
		// Check file size
		if ($_FILES["previewfile"]["size"] > 5000000) {
			echo "Sorry, your preview file is too large.<br></br>";
			$puploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType2 != "doc" && $imageFileType2 != "docx" && $imageFileType2 != "rtf" && $imageFileType2 != "txt" ) {
			echo "Sorry, only DOC, DOCX, RTF & TXT files are allowed. The file you uploaded is a " . $imageFileType2 . " file. <br></br>";
			$puploadOk = 0;
		}
		//Make sure filetypes match
		if($imageFileType2 != $TaskFileFormat) {
			echo "Sorry, Filetype does not match selected filetype.<br></br>";
			$puploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($puploadOk == 0) {
			echo "Sorry, your preview file was not uploaded. <br></br>";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["previewfile"]["tmp_name"], "previewfile_uploads/" . $newpreviewfilename)) {
				echo "The preview ". basename( $_FILES["previewfile"]["name"]). " has been uploaded as Preview " .$last_id .".<br></br>";
			} else {
				echo "Sorry, there was an error uploading your preview file.<br></br>";
			
			}
		}
		
		//<------INSERT SQL QUERY FOR TAGS HERE, IF UPLOADS ARE SUCCESSFUL------->
		if($uploadOk==1||$puploadOk==1){
			$tag_string = $TaskTags;
			$tags = explode(",",$tag_string);
			if(count($tags) < 5 && count($tags) >0){
			for ($x = 0; $x < count($tags); $x++){

			//Due to unique it will only insert if the tag dosent already exist
			$trimmed_tag = trim($tags[$x]);
			$result1 = mysqli_query($link, "INSERT INTO tagnames (tagname) VALUES('$trimmed_tag')");
						if (!$result1) {
			echo "ERROR: Could not able to execute $result1. " . mysqli_error($link);
										}	
			//Add the relational Link
			$result2 = mysqli_query($link, "INSERT INTO tagids (TaskID, TagID) VALUES($last_id, (SELECT tagnames.tagid FROM tagnames WHERE tagnames.tagname = '$trimmed_tag'))");
						if (!$result2) {
			echo "ERROR: Could not able to execute $result2. " . mysqli_error($link);
										}	
				}
			}
			else {
				$puploadOk = 0;
				$uploadOk = 0;
				echo "More than five tags have been entered, or no tags have been entered. Upload failed.";
		}
		}
		//<------------If the file uploads aren't successful, we delete the row created ------->

		if($uploadOk==0||$puploadOk==0){
			$sql_delete = "DELETE FROM taskstable WHERE taskid = $last_id";
			$result = mysqli_query($link , $sql_delete);
			echo "Files not uploaded. The record has been removed.";
			if (!$result) {
			throw new Exception(mysqli_error($link)."[ $sql_delete]");
			}			
		
		}
	



	
	}
	

    } else{
		

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }	
	}

?>