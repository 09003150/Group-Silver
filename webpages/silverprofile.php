<?php
   include('session.php');
?>

<!DOCTYPE html>
<html>


    
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <title>My Profile</title>

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
       

	<h2>Welcome <?php echo "User " .$login_session; ?></h2> 
      
	<br></br>	
	<a href = "currenttasks.php"> Click here to view your current tasks. </a>
	<br></br>
	<a href = "previoustasks.php"> Click here to view previous tasks that you have completed. </a>
	<br></br>
    <a href = "unclaimedtasks.php"> Click here to view unclaimed tasks. </a>
	<br></br>
    <a href = "silveruploadtask.php"> Click here to upload a task. </a>
	
	
	




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