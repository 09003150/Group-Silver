<?php
include('session.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en" class="chrome  win chrome  win"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <title>Silver proofreading</title>

    <script type="text/javascript" src="./Claimacceptance_files/script.js.download"></script>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
</head>
<body>
<div id="art-page-background-simple-gradient">
    </div>
    <div id="art-page-background-glare">
        <div id="art-page-background-glare-image"></div>
    </div>
    <div id="art-main">
        <div class="art-Sheet">
            <div class="art-Sheet-tl"></div>
            <div class="art-Sheet-tr"></div>
            <div class="art-Sheet-bl"></div>
            <div class="art-Sheet-br"></div>
            <div class="art-Sheet-tc"></div>
            <div class="art-Sheet-bc"></div>
            <div class="art-Sheet-cl"></div>
            <div class="art-Sheet-cr"></div>
            <div class="art-Sheet-cc"></div>
            <div class="art-Sheet-body">
                <div class="art-Header">
                    <div class="art-Header-jpeg"></div>
                    <div class="art-Logo">
                        <h1 id="name-text" class="art-Logo-name"><a href="file:///F:/Webbed%20Cityscape/Flaged%20Tasks/index.html#">Silver Proofreading</a></h1>
                        
                    </div>
                </div>
                <div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
                		<li>
                			<a href="file:///F:/Webbed%20Cityscape/Flaged%20Tasks/index.html#" class=" active"><span class="l"></span><span class="r"></span><span class="t">Home</span></a>
                		</li><li><span class="art-menu-separator"></span></li><li><span class="art-menu-separator"></span></li><li><span class="art-menu-separator"></span></li>
                		<li> <a href="file:///F:/Webbed%20Cityscape/Flaged%20Tasks/index.html#"><span class="l"></span><span class="r"></span><span class="t">My Profile</span></a>
                			
                	<ul class="art-menu">
                		<li>
                			<a href="silverindex.html" class=" active"><span class="l"></span><span class="r"></span><span class="t">Home</span></a>
                		</li><li><span class="art-menu-separator"></span></li>
                		<li>
                			<a href="silverprofile.php"><span class="l"></span><span class="r"></span><span class="t">Profile</span></a>

                		</li><li><span class="art-menu-separator"></span></li>
						<li>
                			<a href="silvertaskstream.php"><span class="l"></span><span class="r"></span><span class="t">Taskstream</span></a>
                		</li><li><span class="art-menu-separator"></span></li>						
                		<li>
                			<a href="silverlogout.php"><span class="l"></span><span class="r"></span><span class="t">Logout</span></a>
                		</li>
                	</ul>
                </div>
                <!--<div class="art-contentLayout">-->
                    <div class="art-content">
                        <div class="art-Post">
                            <div class="art-Post-body">
                        <div class="art-Post-inner">
                                        
                                        <h3> Are you sure you would like to cancel this task?</h3><div class="art-PostContent">
									


<?php
$taskIDhref = $_GET['task_id'];
	$dbh = new PDO("mysql:host=localhost;dbname=group19", "root", "");
	# Prepare the SELECT Query
	$stmt = $dbh->query("SELECT TaskID, UserID, TaskTitle, TaskDesc, 
                         ClaimDeadline, SubmissionDeadline FROM taskstable WHERE taskID ='$taskIDhref'");
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
		<table border='2'>
				<tr>
					<th>TaskID</th>
					<th>Title</th>
					<th>Owner ID</th>
					<th>Description</th>
					<th>Due Date</th>
					<th>Submission Date</th>
				</tr>
				<tr>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
				</tr>
		</table>
		<br></br>", $taskID, $title, $userID, $description, $claimDeadline, $submissionDeadline);
	}
?>

<form method="post">
<input type="submit" name="confirm" value="Yes">
<input type="submit" name="confirm" value="No">
</form>

<?php
include('php/canceltask.php');
?>


<br><br>
       						
                       
                                        <div class="cleared"></div>
                        </div>
                        
                        		<div class="cleared"></div>
                            </div>
                        </div>
                        <div class="art-Post">
                            
                                          
                        </div>
                    </div>

                </div>
                <div class="cleared"></div><div class="art-Footer">
                    <div class="art-Footer-inner">
                        <a href="file:///F:/Webbed%20Cityscape/Flaged%20Tasks/index.html#" class="art-rss-tag-icon" title="RSS"></a>
                        <div class="art-Footer-text">
                            
                        </div>
                    </div>
                    <div class="art-Footer-background"></div>
                </div>
        		<div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>
        <!-- Creative Commons License - Please keep designers creative credit unmodified and intact  -->
        
    
    


</body></html>