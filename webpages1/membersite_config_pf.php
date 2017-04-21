<?PHP
require_once("./include/proofreading.php");

$proofreading = new FGMembersite();

//Provide your site name here
$proofreading->SetWebsiteName('silverproofreading.com');

//Provide the email address where you want to get notifications
$proofreading->SetAdminEmail('0875112@studentmail.ul.ie');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$proofreading->InitDB(/*hostname*/'localhost',
                      /*username*/'root',
                      /*password*/'',
                      /*database name*/'group19',
                      /*table name*/'usertable');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$proofreading->SetRandomKey('qSRcVS6DrTzrPvr');

?>