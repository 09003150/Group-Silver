<?php
include('php/session.php');
?>


<html><head>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <title>Current Tasks </title>

    <script type="text/javascript" src="script.js"></script>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
<script>try {  for(var lastpass_iter=0; lastpass_iter < document.forms.length; lastpass_iter++){    var lastpass_f = document.forms[lastpass_iter];    if(typeof(lastpass_f.lpsubmitorig)=="undefined"){      if (typeof(lastpass_f.submit) == "function") {        lastpass_f.lpsubmitorig = lastpass_f.submit;        lastpass_f.submit = function(){          var form = this;          try {            if (document.documentElement && 'createEvent' in document)            {              var forms = document.getElementsByTagName('form');              for (var i=0 ; i<forms.length ; ++i)                if (forms[i]==form)                {                  var element = document.createElement('lpformsubmitdataelement');                  element.setAttribute('formnum',i);                  element.setAttribute('from','submithook');                  document.documentElement.appendChild(element);                  var evt = document.createEvent('Events');                  evt.initEvent('lpformsubmit',true,false);                  element.dispatchEvent(evt);                  break;                }            }          } catch (e) {}          try {            form.lpsubmitorig();          } catch (e) {}        }      }    }  }} catch (e) {}</script></head>
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
                        <h1 id="name-text" class="art-Logo-name"><a href="#"> Silver Proofreading.com</a></h1>
                        <div id="slogan-text" class="art-Logo-text">Best proofreading website in the world</div>
                    </div>
                </div>
                <div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
                		<li>
                			<a href="silverindex.html" class=" active"><span class="l"></span><span class="r"></span><span class="t">Home</span></a>
                		</li><li><span class="art-menu-separator"></span></li>
                		<li>
                			<a href="silverprofile.php"><span class="l"></span><span class="r"></span><span class="t">Profile</span></a>

                		</li><li><span class="art-menu-separator"></span></li>		
                		<li>
                			<a href="silverlogout.php"><span class="l"></span><span class="r"></span><span class="t">Logout</span></a>
                		</li>
                	</ul>
                </div>
                <div class="art-contentLayout">
                    <div class="art-content">
                        <div class="art-Post">
                            <div class="art-Post-body">
                        <div class="art-Post-inner">
                                        <div class="art-PostMetadataHeader">
                                            <h2 class="art-PostHeader">
                                                Current Task Stream (Unclaimed Tasks)
                                            </h2>
                                        </div>
                                        <div class="art-PostContent">

  
                                        <table border="2">
  <thead>
    <tr>
      <th>TaskID</th>
      <th>Title</th>
      <th>Owner ID</th>
      <th>Description</th>
	  <th>Due Date</th>
      <th>Submission Date</th>
      <th>File</th>
	  <th>Claim</th>
	  <th>Flag</th>
    </tr>
  </thead>
  <tbody>
  
  
  <?php
	$dbh = new PDO("mysql:host=localhost;dbname=group19", "root", "");
	# Prepare the SELECT Query
	$stmt = $dbh->query("SELECT TaskID, UserID, TaskTitle, TaskDesc, 
                         ClaimDeadline, SubmissionDeadline FROM taskstable WHERE StatusID ='1'");
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
					<td> %s </td>
					<td><a href='silvertaskdetails.php?task_id=%s' title='Details'>Details</a></td>
					<td><a href='silverclaimacceptance.php?task_id=%s' title='Claim'>Claim</a></td>
					<td><a href='silverflagtask.php?task_id=%s' title='Flag'>Flag</a></td>
				</tr>", $taskID, $title, $userID, $description, $claimDeadline, $submissionDeadline,$taskID,$taskID,$taskID);
	}
 
 ?>
  </tbody>
</table>
    
                                        


    
                                        
	
                                                
                                        </div>
                                        <div class="cleared"></div>
                        </div>
                        
                        		<div class="cleared"></div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="cleared"></div><div class="art-Footer">
                    <div class="art-Footer-inner">
                        
                        <div class="art-Footer-text">
                            <p><a href="#">About this Website</a> | <a href="#">Terms of Use</a> | <a href="#">Contact us</a>
                                | <a href="#">Privacy Statement</a><br>
                                Copyright © 2017 ---. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="art-Footer-background"></div>
                </div>
        		<div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>
        <!-- Creative Commons License - Please keep designers creative credit unmodified and intact  -->
        <p class="art-page-footer"><a href="http://webjestic.net/templates/">CSS Template</a> designed by <a href="http://webjestic.net">webJestic</a></p>
    </div>
    


</body>

</html>