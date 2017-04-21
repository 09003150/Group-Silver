  <?php
	$dbh = new PDO("mysql:host=localhost;dbname=group19", "root", "");
	# Prepare the SELECT Query
	$stmt = $dbh->query("SELECT TaskID, UserID, FlagID, FlagReason FROM flaggedtasks");
	# Execute the SELECT Query
	$stmt->execute();
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$flagID = $row['FlagID'];
		$userID = $row['UserID'];
		$taskID = $row['TaskID'];
		$flagreason = $row['FlagReason'];
		
		
		printf("
				<tr>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td><a href='silvertaskdetails.php?task_id=%s' title='Details'>Details</a></td>
					<td><a href='silverbanuser.php?user_id=%s' title='Banuser'>Ban</a></td>
				</tr>", $flagID, $userID, $taskID, $flagreason,$taskID, $userID);
	}
 
 ?>