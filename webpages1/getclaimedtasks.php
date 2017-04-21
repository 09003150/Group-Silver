  <?php
	$dbh = new PDO("mysql:host=localhost;dbname=group19", "root", "");
	# Prepare the SELECT Query
	$stmt = $dbh->query("SELECT taskstable.TaskID, taskstable.UserID, taskstable.TaskTitle, taskstable.TaskDesc, taskstable.ClaimDeadline, taskstable.SubmissionDeadline 
						FROM taskstable inner JOIN claimedtasks on taskstable.TaskID = claimedtasks.taskID WHERE claimedtasks.ClaimID ='$login_session'");
	# Execute the SELECT Query
	$stmt->execute();
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$taskID = $row['TaskID'];
		$userID = $row['UserID'];
		$title = $row['TaskTitle'];
		$description = $row['TaskDesc'];
		$claimDeadline = $row['ClaimDeadline'];
		$submissionDeadline = $row['SubmissionDeadline'];
		printf("
				<tr>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td><a href='silvertaskdetails.php?task_id=%s' title='Details'>Details</a></td>
					<td><a href='silvercanceltask.php?task_id=%s' title='Cancel'>Cancel</a></td>
					<td><a href='silversubmittask.php?task_id=%s' title='Submit'>Submit</a></td>
				</tr>", $taskID, $title, $userID, $description, $submissionDeadline,$taskID,$taskID,$taskID);
	}
 
 ?>