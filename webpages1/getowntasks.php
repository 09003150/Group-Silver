  <?php
	$dbh = new PDO("mysql:host=localhost;dbname=group19", "root", "");
	# Prepare the SELECT Query
	$stmt = $dbh->query("SELECT taskstable.TaskID, taskstable.UserID, status.Status, taskstable.TaskTitle, taskstable.ClaimDeadline, taskstable.SubmissionDeadline 
						FROM status inner join taskstable ON taskstable.statusID = status.StatusID where taskstable.userID = '$login_session'");
	# Execute the SELECT Query
	$stmt->execute();
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$taskID = $row['TaskID'];
		$userID = $row['UserID'];
		$title = $row['TaskTitle'];
		$status = $row['Status'];
		$claimDeadline = $row['ClaimDeadline'];
		$submissionDeadline = $row['SubmissionDeadline'];
		printf("
				<tr>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td><a href='silvertaskdetails.php?task_id=%s' title='Details'>Details</a></td>
				</tr>", $taskID, $title, $userID, $status, $claimDeadline, $submissionDeadline,$taskID);
	}
 
 ?>
