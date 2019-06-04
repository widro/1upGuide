<?php
global $link;
global $link2;
global $dbname1;
global $dbname2;
$thisurl = $_SERVER['HTTP_HOST'];

if(($thisurl=="www.widroverse.com")||($thisurl=="widroverse.com")){
	$dbname1 = "db222827_widroverse";
	$dbname2 = "information_schema";
	$link = mysqli_connect("internal-db.s222827.gridserver.com", "db222827", "llFt[8H,1d", $dbname1);
	$link2 = mysqli_connect("internal-db.s222827.gridserver.com", "db222827", "llFt[8H,1d", $dbname2);
}
else{
	$dbname1 = "widroverse";
	$dbname2 = "information_schema";
	$link = mysqli_connect("localhost", "root", "", $dbname1);
	$link2 = mysqli_connect("localhost", "root", "", $dbname2);

}

?>