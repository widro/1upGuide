<?php
global $link;
$thisurl = $_SERVER['HTTP_HOST'];

if(($thisurl=="www.1upguide.com")||($thisurl=="1upguide.com")){
	$link = mysqli_connect("internal-db.s54729.gridserver.com", "db54729", "O47jhg(%vfoyh", "db54729_1upguide");
}
else{
	$link = mysqli_connect("localhost", "root", "", "1upguide");
}

?>