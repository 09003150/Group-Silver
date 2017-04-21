<?php
   include('php/session.php');
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
       

<form action="upload.php" method="post" enctype="multipart/form-data">
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
	  <br/>Task Tags (max 4):<br/> 
    <input type="text" name="TaskTags" placeholder="Insert tags (seperated by comma)"/><br/>
	  <br/>Task file Format:<br/>
	  
	<select name="TaskFileFormat" type="text" name="TaskFileFormat">>
	<option value='docx'>.docx</option>
	<option value='doc'>.doc</option>
	<option value='tex'>.tex</option>
	<option value='pdf'>.pdf</option>
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
include('php/createtask.php');
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