<?php
$thisurl =  $_SERVER['HTTP_HOST'];

if(($thisurl=="www.1upguide.com")||($thisurl=="1upguide.com")){
	$dbname = "db54729_1upguide";
	$connection = mysql_connect("internal-db.s54729.gridserver.com", "db54729", "O47jhg(%vfoyh") or die("Couldn't connect.");
}
else{
	$dbname = "1upguide";
	$connection = mysql_connect("localhost", "root", "") or die("Couldn't connect.");
}
$db = mysql_select_db($dbname) or die("Couldn't select database");


?>