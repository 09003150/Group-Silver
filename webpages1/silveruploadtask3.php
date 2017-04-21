<?php
   include('session.php');
?>

<!DOCTYPE html>
<html>


    
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <title>Create Task</title>

    <script type="text/javascript" src="script.js"></script>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    <!--[if IE 6]><link rel="stylesheet" href="style/style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style/style.ie7.css" type="text/css" media="screen" /><![endif]-->
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
                			<a href="silverindex.html" class=" active"><span class="l"></span><span class="r"></span><span class="t">Home</span></a>
                		</li><li><span class="art-menu-separator"></span></li>
                		<li> <a href="silverprofile.php"><span class="l"></span><span class="r"></span><span class="t">My Profile</span></a>
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
                                        
										
																	
										
										
							<!--THIS IS WHERE YOU POST CONTENT-->										
										
                                        <div class="art-PostContent">
       

<form method="post" enctype="multipart/form-data">
<fieldset>
<legend><b>Upload Your Task</b></legend>

<div class='short_explanation'>* required fields</div>

	  <br/>Task Title:<br/> 
    <input type="text" name="TaskTitle" placeholder="Task Title"/><br/>
	  <br/>Task Description:<br/> 
    <input type="text" name="TaskDesc" placeholder="Task Description"/><br/>
	  <br/>Task Number of Pages:<br/> 
    <input type="text" name="TaskNoPages" placeholder="Number of pages"/><br/>
	  <br/>Task Word Count:<br/> 
    <input type="text" name="TaskWordCount" placeholder="Word Count"/><br/>
	  <br/>Task Deadline for Return:<br/> 
    <input type="date" name="ClaimDeadline" placeholder="dd/mm/yyyy"/><br/>
	  <br/>Task Deadline for Submission:<br/> 
    <input type="date" name="SubmissionDeadline" placeholder="dd/mm/yyyy"/><br/>
	
	  <br/>Task file Format:<br/>
	  
	<select name="TaskFileFormat" type="text" name="TaskFileFormat">>
	<option value='docx'>.docx</option>
	<option value='doc'>.doc</option>
<!--	<option value='docm'>.docm</option>
	<option value='tex'>.tex</option>
	<option value='pdf'>.pdf</option>
	<option value='dotm'>.dotm</option>
	<option value='dot'>.dot</option>
	<option value='xps'>.xps</option> -->
	<option value='rtf'>.rtf</option> 
	<option value='txt'>.txt</option> 
	</select>
    <br/> 	
 
 	  <br/>Task Type:<br> 
	
 	<select name="TaskType" type="text" name="TaskType">
	<option value='essay'>Essay</option>
	<option value='essay'>FYP</option>
	<option value='project'>Project</option>
	<option value='msc thesis'>MSc Thesis</option>
	<option value='bsc dissertation'>BSc Dissertation</option>
	<option value='phd thesis'>PhD Thesis</option>
	<option value='assignment'>Assignment</option>
	<option value='research paper'>Research Paper</option>
	<option value='project report'>Project Report</option>
	</select>
    <br/>
	
	<!---------------------------------INSERT TAGS FIELDS HERE------------------------------->
	
	<br/>TagName:<br/> 
    <input type="text" name="TagName" placeholder="TagName"/><br/>
	  <br/>TagID:<br/> 
    <input type="text" name="TagID" placeholder="TagID"/><br/>
	 
	 
	 
	 
	 <!----------------------------------END OF TAG FIELDS------------------------>
	
	
	
	<br></br>
	Upload preview:   <br/>
	<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
	<input name="previewfile" type="file" />
    <br/> Upload document:   <br/>
	<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
	<input name="mainfile" type="file" />
	<br></br>
    <input type="submit" name="submit" value="Submit" />	
</fieldset>  
</form>

  
  
  
 


  
<?php

    /* Attempt MySQL server connection.

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "group19");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
	
	//if (isset($_POST['TaskTitle'])&& isset($_POST['TaskDesc']) && isset($_POST['TaskNoPages']) && isset($_POST['TaskWordCount']) isset($_POST['ClaimDeadline']) && isset($_POST['SubmissionDeadline']) && isset($_POST['TaskFileFormat']) && isset($_POST['TaskType'])) {

    // Escape user inputs for security

    $UserID =             $login_session;
	$TaskTitle =          mysqli_real_escape_string($link, $_REQUEST['TaskTitle']);
	$TaskDesc =           mysqli_real_escape_string($link, $_REQUEST['TaskDesc']);
	$TaskNoPages =        mysqli_real_escape_string($link, $_REQUEST['TaskNoPages']);
	$TaskWordCount =      mysqli_real_escape_string($link, $_REQUEST['TaskWordCount']);
	$ClaimDeadline =      mysqli_real_escape_string($link, $_REQUEST['ClaimDeadline']);
	$SubmissionDeadline = mysqli_real_escape_string($link, $_REQUEST['SubmissionDeadline']);
	$TaskFileFormat =     mysqli_real_escape_string($link, $_REQUEST['TaskFileFormat']);
	$TaskType =           mysqli_real_escape_string($link, $_REQUEST['TaskType']);
	
	
	
	
	
	
	
	
	//<------INSERT ESCAPE CHARACTERS FOR TAGS HERE------->
	
    $TagName = mysqli_real_escape_string($link, $_REQUEST['TagName']);
	$TagID =   mysqli_real_escape_string($link, $_REQUEST['TagID']);
	
	
	

    // attempt insert query execution
	
    $sql = "INSERT INTO taskstable (TaskTitle, TaskDesc, TaskNoPages, TaskWordCount, ClaimDeadline,  SubmissionDeadline, TaskFileFormat, TaskType)
	VALUES ('$TaskTitle', '$TaskDesc','$TaskNoPages', '$TaskWordCount', '$ClaimDeadline', '$SubmissionDeadline', '$TaskFileFormat', '$TaskType', '0', '1')";
	
	
	
	
	
	
	//<------INSERT SQL QUERY FOR TAGS HERE-------

	
if(isset($_POST['submit'])){
    $con=mysql_connect("localhost","root","");
    if(!$con)
    {
        die("Nu se poate face conexiunea la baza de date" . mysql_error());
    }

    mysql_select_db("group19",$con);
    $sql="INSERT INTO taskstable (TaskTitle, TaskDesc, TaskNoPages, TaskWordCount, ClaimDeadline,  SubmissionDeadline, TaskFileFormat, TaskType) 
	VALUES ('$_POST[TaskTitle]','$_POST[TaskDesc]','$_POST[TaskNoPages]','$_POST[TaskWordCount]','$_POST[ClaimDeadline]','$_POST[SubmissionDeadline]','$_POST[TaskFileFormat]','$_POST[TaskType]',)";
    $sql="INSERT INTO tagnames (TagName, TagID) VALUES ('$_POST[TagName]','$_POST[TagID]')";
    mysql_query($sql,$con);
    mysql_close($con);
}

// get data
//$tagnames = get_tagnames_rows();
//$tagids_fk_tagid = 123;

// prepare first part of the query (before values)
//$query = "INSERT INTO `tagnames` (
   //`tagnames_fk_tagName`,
   //`tagids_fk_tagName`
   
//) VALUES ('$TagName', '$TagID'";

//loop the table 1 to get all foreign keys and put it in array
//foreach($tagnames as $row) {
 //   $query_values[] = "(".$row["tagnames_tag_id"].", $tagids_fk_tagid, NOW())";
//}

// Implode the query values array with a coma and execute the query.
//$db->query($query . implode(',',$query_values));



 //--------------------------------------------->	
	
	
	
	
	
	
	
	
	
   if(mysqli_query($link, $sql)){
		//This copies the primary key of the table just created, which is the taskid (auto incremented)
		$last_id = mysqli_insert_id($link);

		
// This is the code that uploads files
if(isset($_POST['submit']) && $_FILES['mainfile']['size'] > 0 && $_FILES['previewfile']['size'] > 0)
{

//Mainfile details
$fileName = $_FILES['mainfile']['name'];
$tmpName  = $_FILES['mainfile']['tmp_name'];
$fileSize = $_FILES['mainfile']['size'];
$fileType = $_FILES['mainfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

//previewfile details
$p_fileName = $_FILES['previewfile']['name'];
$p_tmpName  = $_FILES['previewfile']['tmp_name'];
$p_fileSize = $_FILES['previewfile']['size'];
$p_fileType = $_FILES['previewfile']['type'];

$p_fp      = fopen($p_tmpName, 'r');
$p_content = fread($p_fp, filesize($p_tmpName));
$p_content = addslashes($p_content);
fclose($p_fp);



if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
	$p_fileName = addslashes($p_fileName);
}

//queries
$query_mainfile = "INSERT INTO fileupload (filename, filesize, filetype, filecontent, taskid) ".
"VALUES ('$fileName', '$fileSize', '$fileType', '$content', '$last_id')";

$query_previewfile = "INSERT INTO sampleupload (samplename, samplesize, sampletype, samplecontent, taskid) ".
"VALUES ('$p_fileName', '$p_fileSize', '$p_fileType', '$p_content','$last_id')";

//executing the queries
mysqli_query($link,$query_mainfile) or die("Error: " .mysqli_error($link));
mysqli_query($link,$query_previewfile) or die("Error: " .mysqli_error($link));
//since the row in taskstable is already created, I need 
//to create a condition where if the upload is not successful the row is deleted
}		
		
		
        echo "Records Uploaded successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error();

    }
	


?>




										<!--THIS IS WHERE CONTENT ENDS-->	


                                            	<span class="art-button-wrapper   ">
                                            		<span class="l"> </span>
                                            		<span class="r"> </span>
                                            		
                                            	</span>
                                            <p></p>
                                            
                                            <table class="table" width="100%">
                                            	<tbody><tr>
                                            		<td width="33%" valign="top">
                                            		<div class="art-Block">
                                            			
                           
                                            		</div>
                                            		</td>
                                            		<td width="33%" valign="top">
                                            		<div class="art-Block">
                                            			 
                                            		</div>
                                            		</td>
                                            		<td width="33%" valign="top">
                                            		<div class="art-Block">
                                            					                          	
                                            		</div>
                                            		</td>
                                            	</tr>
                                            </tbody></table>
                                                
                                        </div>
										
										
										
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
        <!-- END OF PAGE  -->
        
    


</body>
</html>