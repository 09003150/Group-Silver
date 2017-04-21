<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Silver Proofreading</title>

    <script type="text/javascript" src="script.js"></script>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
	
	
	
	<title>File Upload </title>
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
                        <h1 id="name-text" class="art-Logo-name"><a href="#">Silver Proofreading</a></h1>
                        <div id="slogan-text" class="art-Logo-text">Best Proofreading Site in the World</div>
                    </div>
                </div>
                <div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
                		<li>
                			<a href="#" class=" active"><span class="l"></span><span class="r"></span><span class="t">Home</span></a>
                		</li>
                		
                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">Log out</span></a>
                		</li>
                	</ul>
                </div>
				<!--<div class="art-contentLayout">-->
              
				   <div class="art-content">
                        <div class="art-Post">
                            <div class="art-Post-body">
                        <div class="art-Post-inner">
                                        <div class="art-PostMetadataHeader">
                                            <h2 class="art-PostHeader">
                                                Welcome to Silver Proofreading <span style="color:#FF0000">TASKS PAGE </span>
                                            </h2>
                                        </div>
<br/>										
 <div class="art-PostContent">
       
                                          <h2> Please Enter Your File Details</h2>



<form method="post">
<fieldset>
<legend><b>Upload Your Task</b></legend>

<div class='short_explanation'>* required fields</div>

	  <br/>UserID:<br/> 
    <input type="text" name="UserID" placeholder="Enter your UserID"/><br/>
	  <br/>Task Title:<br/> 
    <input type="text" name="TaskTitle" placeholder="Task Title"/><br/>
	  <br/>Task Description:<br/> 
    <input type="text" name="TaskDesc" placeholder="Task Description"/><br/>
	  <br/>Task Number of Pages:<br/> 
    <input type="text" name="TaskNoPages" placeholder="Number of pages"/><br/>
	  <br/>Task Word Count:<br/> 
    <input type="text" name="TaskWordCount" placeholder="Word Count"/><br/>
	  <br/>Task Deadline for Return:<br/> 
    <input type="text" name="ClaimDeadline" placeholder="Deadline for Return"/><br/>
	  <br/>Task Deadline for Submission:<br/> 
    <input type="text" name="SubmissionDeadline" placeholder="Deadline for Submission"/><br/>
	
	  <br/>Task file Format:<br/>
	  
	<select name="TaskFileFormat" type="text" name="TaskFileFormat">>
	<option value='docx'>.docx</option>
	<option value='doc'>.doc</option>
	<option value='docm'>.docm</option>
	<option value='tex'>.tex</option>
	<option value='pdf'>.pdf</option>
	<option value='dotm'>.dotm</option>
	<option value='dot'>.dot</option>
	<option value='xps'>.xps</option>
	<option value='rtf'>.rtf</option>
	<option value='txt'>.txt</option> 
	</select>
    <br/> 	
 
 	  <br/>Task Type:<br> 
	
 	<select name="TaskType" type="text" name="TaskType">
	<option value='essay'>Essay</option>
	<option value='project'>Project</option>
	<option value='msc thesis'>MSc Thesis</option>
	<option value='bsc dissertation'>BSc Dissertation</option>
	<option value='phd thesis'>PhD Thesis</option>
	<option value='assignment'>Assignment</option>
	<option value='research paper'>Research Paper</option>
	<option value='project report'>Project Report</option>
	</select>
    <br/>
	
    <br/> Send this file:   <br/>
	<input name="userfile" type="file" />
    <input type="submit" value="Send File" />	
</fieldset>  
</form>
</div>
  <br/>
  
  <?php

    /* Attempt MySQL server connection.

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "group19");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
	
	if (isset($_POST['UserID']) && isset($_POST['TaskTitle']) && isset($_POST['TaskNoPages']) && isset($_POST['TaskWordCount']) && isset($_POST['TaskFileFormat']) && isset($_POST['TaskDesc'])&& isset($_POST['ClaimDeadline'])&& isset($_POST['SubmissionDeadline'])&& isset($_POST['TaskType'])) {

    // Escape user inputs for security

    $UserID =             mysqli_real_escape_string($link, $_REQUEST['UserID']);
	$TaskTitle =          mysqli_real_escape_string($link, $_REQUEST['TaskTitle']);
	$TaskNoPages =        mysqli_real_escape_string($link, $_REQUEST['TaskNoPages']);
	$TaskWordCount =      mysqli_real_escape_string($link, $_REQUEST['TaskWordCount']);
	$TaskFileFormat =     mysqli_real_escape_string($link, $_REQUEST['TaskFileFormat']);
    $TaskDesc =           mysqli_real_escape_string($link, $_REQUEST['TaskDesc']);
	$ClaimDeadline =      mysqli_real_escape_string($link, $_REQUEST['ClaimDeadline']);
	$SubmissionDeadline = mysqli_real_escape_string($link, $_REQUEST['SubmissionDeadline']);
	$TaskType =           mysqli_real_escape_string($link, $_REQUEST['TaskType']);
	


    // attempt insert query execution
	
    $sql = "INSERT INTO taskstable (UserID, TaskTitle, TaskNoPages, TaskWordCount, TaskFileFormat, TaskDesc, ClaimDeadline,  SubmissionDeadline, TaskType)
	VALUES ('$UserID', '$TaskTitle', '$TaskNoPages', '$TaskWordCount', '$TaskFileFormat', '$TaskDesc', '$ClaimDeadline', '$SubmissionDeadline', '$TaskType')";
	
   if(mysqli_query($link, $sql)){

        echo "Records Uploaded successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }   

    


if(isset($_FILES['files'])){
    $errors= array();
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$taskid = $key.$_FILES['files']['name'][$key];
		$tasktitle = $key.$_FILES['files']['name'][$key];
		$tasknopages =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$tasktype=$_FILES['files']['type'][$key];	
        if($tasknopages > 2097152){
			$errors[]='File size must be less than 2 MB';
        }		
        $query="INSERT into upload_data (`TaskID`,`TaskTitle`,`TaskNoPages`,`TaskType`) VALUES('$taskid','$tasktitle','$tasknopages','$tasktype'); ";
        $desired_dir="user_data";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$tasktitle)==false){
                move_uploaded_file($file_tmp,"user_data/".$tasktitle);
            }else{									//rename the file if another one exist
                $new_dir="user_data/".$tasktitle.time();
                 rename($file_tmp,$new_dir) ;				
            }
            mysql_query($query);			
        }else{
                print_r($errors);
        }
    }
	if(empty($error)){
		echo "Success";
	}
}
	}

?>


<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="files[]" multiple="" />
	<input type="submit"/>
</form>

								
</body>
</html>
