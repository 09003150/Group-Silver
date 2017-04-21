  <?php
	$taskIDhref = $_GET['task_id'];
	$dbh = new PDO("mysql:host=localhost;dbname=group19", "root", "");
	# Prepare the SELECT Queries
	$stmt = $dbh->query("SELECT TaskID, UserID, TaskTitle, TaskDesc, TaskNoPages, TaskWordCount,
                         ClaimDeadline, SubmissionDeadline, TaskType, FlaggedTasks, StatusID FROM taskstable WHERE TaskID ='$taskIDhref'");
	$stmt_status = $dbh -> query("SELECT Status FROM status inner join taskstable ON taskstable.statusID = status.StatusID where taskstable.taskID = '$taskIDhref'");
	$stmt_flagged = $dbh -> prepare("SELECT FlagReason FROM flaggedtasks inner join ON taskstable.taskID = flaggedtasks.taskID where taskstable.taskID = '$taskIDhref'");
	# Execute the first SELECT Query
	$stmt->execute();
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$taskID = $row['TaskID'];
		$userID = $row['UserID'];
		$title = $row['TaskTitle'];
		$description = $row['TaskDesc'];
		$claimDeadline = $row['ClaimDeadline'];
		$submissionDeadline = $row['SubmissionDeadline'];
		$type=$row['TaskType'];
		$nopages=$row['TaskNoPages'];
		$wcount=$row['TaskWordCount'];
		printf("<table border='0'>
				<tr>
					<th align='left'> Task ID: </th> 
					<td>%s</td>
				</tr>
				<tr>
					<th align='left'> User ID (person who uploaded the Task): </th>
					<td>%s</td>
				</tr>
				<tr>
					<th align='left'> Task Title: </th> 
					<td>%s</td>
				</tr>
				<tr>
					<th align='left'> Task Description: </th> 
					<td>%s</td>
				</tr>
				<tr>
					<th align='left'> Claim Deadline: </th>
					<td>%s</td>
				</tr>
				<tr>
					<th align='left'> Submission Deadline: </th> 
					<td>%s</td>
				</tr>
				<tr>
					<th align='left'> Task Type: </th> 
					<td>%s</td>
				</tr>
				<tr>
					<th align='left'> Number of pages: </th> 
					<td>%s</td>
				</tr>
				<tr>
					<th align='left'> Word Count: </th>
					<td>%s</td>
				</tr>
				</table>
				<br></br>
				", $taskID, $userID, $title, $description, $claimDeadline, $submissionDeadline, $type, $nopages, $wcount);
	}
	
	# Execute the second SELECT Query
	$stmt_status->execute();
	while($row = $stmt_status->fetch(PDO::FETCH_ASSOC)){
		$status=$row['Status'];
		echo "$status";
		printf("<table border='0'>
				<tr>
					<th align='left'> Task Status: </th> 
					<td>%s</td>
				</tr>
				</table>
				", $status);
	}

		# Execute the third SELECT Query, checking if it's been flagged
	$stmt_flagged->execute();
	$rowcount = $stmt_flagged->rowCount();
	if($rowcount == 0){
			printf("<table border='0'>
					<tr>
					<th align='left'> Task Flagged?: </th> 
					<td>No</td>
				</tr>
				</table>");
	} else if ($rowcount == 1){
	while($row = $stmt_flagged->fetch(PDO::FETCH_ASSOC)){
		$flagged=$row['FlaggedTasks'];
		printf("<table border='0'>
				<tr>
					<th align='left'> Task Flagged?: </th> 
					<td> Yes, Reason: %s</td>
				</tr>
				</table>
				", $flagged);
		}
	}

 ?>