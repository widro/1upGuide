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
//where date > '2001%'

$sqlplaylists = "
select count(band) as totalsongs, band
from playlists
where active=0
group by band
order by totalsongs desc
";

$resultplaylists = mysqli_query($link, $sqlplaylists);
$i=0;

while($rowplaylists = mysqli_fetch_array($resultplaylists)){
	$totalsongs = $rowplaylists['totalsongs'];
	$band = $rowplaylists['band'];
	$band = "<a href=\"band.php?b=$band\">$band</a>";

	$displayblock .= "
	<tr>
		<td valign=top>$band</td>
		<td valign=top>$totalsongs</td>
	</tr>
	";

	$i++;
}


include('includes/header.php'); ?>


<table width=600 cellpadding=25>
<h1>Top Bands</h1>
<br>
<table width=600 cellpadding=5>
<tr>
<td valign=top>Band</td>
<td valign=top>Total</td>
</tr>
<?=$displayblock?>
</table>

<?php include('includes/footer.php'); ?>