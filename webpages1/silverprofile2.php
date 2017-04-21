<?php
include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // userid and password sent from form 
      
      $myuserid = mysqli_real_escape_string($db,$_POST['userid']);
      $myuserpassword = mysqli_real_escape_string($db,$_POST['userpassword']); 
      
      $sql = "SELECT userid FROM usertable WHERE userid = '$myuserid' and userpassword = '$myuserpassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $userid and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myuserid;
         
			header("Location: silverprofile.php");      

		}else {
         $error = "Your Login ID or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>


    
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <title>Login</title>

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

                	</ul>
                </div>
                <!--<div class="art-contentLayout">-->
                    <div class="art-content">
                        <div class="art-Post">
                            <div class="art-Post-body">
                        <div class="art-Post-inner">
                                        
										
										
										
										
										
<!--THIS IS WHERE YOU POST CONTENT-->										
										
                                        <div class="art-PostContent">
										
<	<h2>Welcome <?php echo $login_session_uname; ?></h2> 
      	
	<a href = "silverclaimedtasks.php"> Click here to view your current tasks, which you have claimed. </a>
	<br></br>
	<a href = "silverowntasks.php"> Click here to view tasks that have been uploaded by you, to see their status. </a>
	<br></br>
	<a href = "silveraddtags.php"> Click here to addtags to your user profile. </a>
	<br></br>
    <a href = "silvertaskstream.php"> Click here to view the task stream. </a>
	<br></br>
    <a href = "silveruploadtask.php"> Click here to create a task for proofreading. </a>
	<br></br>
    <a href = "silversubmittask.php"> Click here to submit a task that you have completed. </a>
	

<?php if($login_session_upoints >= 40) : ?>
	<br></br>
	<h4>Moderator Actions</h4>
    <a href="silverflaggedtasks.php" > Click here to view tasks that have been flagged.</a>
	<br></br>
	<a href = "silvertaskstream.php"> Click here to view the task stream. </a>
	<br></br>
<?php endif; ?>

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
        
    


</body></html>