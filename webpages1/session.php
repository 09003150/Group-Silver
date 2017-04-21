<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select userid from usertable where userid = '$user_check' ");
   $ses_sql_uname = mysqli_query($db,"select firstname from usertable where userid = '$user_check' ");
   $ses_sql_upoints = mysqli_query($db,"select userpoints from usertable where userid = '$user_check' ");
   $ses_sql_banstatus = mysqli_query($db,"select banstatus from usertable where userid = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $row_uname = mysqli_fetch_array($ses_sql_uname,MYSQLI_ASSOC);
   $row_upoints = mysqli_fetch_array($ses_sql_upoints,MYSQLI_ASSOC);
   $row_bstatus = mysqli_fetch_array($ses_sql_banstatus, MYSQLI_ASSOC);
   
   $login_session = $row['userid'];
   $login_session_uname = $row_uname['firstname'];
   $login_session_upoints = $row_upoints['userpoints'];
   $login_ban_status = $row['banstatus'];
   
   if($login_ban_status=='1'){
	   header("location: silveryouarebanned.php");
   }
	  
   if(!isset($_SESSION['login_user'])){
      header("location: silverlogin.php");
   }
?>