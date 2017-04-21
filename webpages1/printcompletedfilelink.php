 <?php
$taskIDhref = $_GET['task_id'];
	$dbh = new PDO("mysql:host=localhost;dbname=group19", "root", "");
	# Prepare the SELECT Query
	$stmt1 = $dbh->query("SELECT TaskFileFormat, TaskID FROM taskstable where taskID ='$taskIDhref'");
	while($row = $stmt1->fetch(PDO::FETCH_ASSOC)){
		$ext = $row['TaskFileFormat'];
		$taskID = $row['TaskID'];
		$filename = "$taskID.$ext";
		printf("<table border='0'>
				<tr>
					<th align ='left'> Proofread File: </th>
					<td> <a href='downloadcompletedfile.php?download_file=%s'>Download</a></td>
				</tr>
				</table>
				", $filename);
				
	}
 ?>