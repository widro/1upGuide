<?
/* db connection  */
$dbname = "db222827_widroverse";

$connection = mysql_connect( $_ENV{DATABASE_SERVER}, "db222827", "llFt[8H,1d") or die("Couldn't connect.");
$db = mysql_select_db($dbname) or die("Couldn't select database");

?>