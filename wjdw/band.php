<?
$thisurl =  $_SERVER['HTTP_HOST'];

if(($thisurl=="www.widroverse.com")||($thisurl=="widroverse.com")){
	$link = mysqli_connect("internal-db.s214582.gridserver.com", "db214582", "_r6eM7R-td", "db214582_widroverse");
}
else{
	$link = mysqli_connect("localhost", "root", "", "1upguide");
}


if($_GET['b']){
	$b = $_GET['b'];
}
elseif($_POST['b']){
	$b = $_POST['b'];
}



// output playlists
$sqlplaylists = "
SELECT id , track , mix , band , song , type , date , volume, active
FROM playlists
WHERE active = 0
AND band = '$b'
ORDER BY date DESC, track
";

$resultplaylists = mysqli_query($link, $sqlplaylists);
$i=0;

while($rowplaylists = mysqli_fetch_array($resultplaylists)){

$id = $rowplaylists['id'];
$track = $rowplaylists['track'];
$mix = $rowplaylists['mix'];
$band = $rowplaylists['band'];
$song = $rowplaylists['song'];
$type = $rowplaylists['type'];
$date = $rowplaylists['date'];
$date = substr($date, 0, 10);
$volume = $rowplaylists['volume'];
$active = $rowplaylists['active'];

if($type=='1'){
	$song = "<font color=blue>$song</font>";
}
elseif($type=='2'){
	$song = "<font color=ff6600>$song</font>";
}
elseif($type=='3'){
	$song = "<font color=ff0000>$song</font>";
}


if($i%2==0){
$displayblock .= "

<tr>
<td bgcolor=333333 valign=top>$date</td>
<td bgcolor=333333 valign=top>$mix</td>
<td bgcolor=333333 valign=top>$track</td>
<td bgcolor=333333 valign=top>$song</td>
</tr>

";
}
else{
$displayblock .= "

<tr>
<td bgcolor=666666 valign=top>$date</td>
<td bgcolor=666666 valign=top>$mix</td>
<td bgcolor=666666 valign=top>$track</td>
<td bgcolor=666666 valign=top>$song</td>
</tr>

";
}


$i++;
}







?>






<?php include('includes/header.php'); ?>

<table width=600 cellpadding=25>
<h1><?=$b?></h1>
<br>
<table width=600 cellpadding=5>
<tr>
<td valign=top>Date</td>
<td valign=top>Mix</td>
<td valign=top>Track</td>
<td valign=top>Song</td>
</tr>
<?=$displayblock?>
</table>






<?php include('includes/footer.php'); ?>