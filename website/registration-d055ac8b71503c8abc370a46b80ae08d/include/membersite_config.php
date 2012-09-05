<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('http://www.cim.unito.it');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('paola.bardini@unito.it');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting index.php for the first time
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'cim_adm',
                      /*password*/'vpsyyAR4jp',
                      /*database name*/'cimdb',
                      /*table name*/'EuroBioImaging_Meeting_Regs');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>