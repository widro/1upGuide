<?php

//temp functions
include('functions.php');

//dbconnect
include('version2/dbconnect.php');






$headlineadd = "Games: ";


//check for get variables

$developer = assignvalue($_POST['developer'], $_GET['developer'], "");
if($developer){
	$developer_clean = space20($developer);
	$addsql .= "AND developer = '$developer' ";
	$headlineadd .= "developer - $developer ";
	$paginationadd .= "&developer=$developer_clean";
}

$publisher = assignvalue($_POST['publisher'], $_GET['publisher'], "");
if($publisher){
	$publisher_clean = space20($publisher);
	$addsql .= "AND publisher = '$publisher' ";
	$headlineadd .= "publisher - $publisher ";
	$paginationadd .= "&system=$publisher_clean";
}

$system = assignvalue($_POST['system'], $_GET['system'], "");
if($system){
	$system_clean = space20($system);
	$addsql .= "AND system = '$system' ";
	$headlineadd .= "system - $system ";
	$paginationadd .= "&system=$system_clean";
}

$franchise = assignvalue($_POST['franchise'], $_GET['franchise'], "");
if($franchise){
	$franchise_clean = space20($franchise);
	$addsql .= "AND franchise = '$franchise' ";
	$headlineadd .= "franchise - $franchise ";
	$paginationadd .= "&franchise=$franchise_clean";
}

$genre = assignvalue($_POST['genre'], $_GET['genre'], "");
if($genre){
	$genre_clean = space20($genre);
	$addsql .= "AND genre = '$genre' ";
	$headlineadd .= "genre - $genre ";
	$paginationadd .= "&genre=$genre_clean";
}

$status = assignvalue($_POST['status'], $_GET['status'], "");
if($status){
	$status_clean = space20($status);
	$addsql .= "AND status = '$status' ";
	$headlineadd .= "status - $status ";
	$paginationadd .= "&status=$status_clean";
}

$year = assignvalue($_POST['year'], $_GET['year'], "");
if($year){
	$year_clean = space20($year);
	$addsql .= "AND year = '$year' ";
	$headlineadd .= "year - $year ";
	$paginationadd .= "&year=$year_clean";
}

$power99 = assignvalue($_POST['power99'], $_GET['power99'], "");
if($power99){
	$power99_clean = space20($power99);
	$addsql .= "AND power99 = '$power99' ";
	$headlineadd .= "Power 99 ";
	$paginationadd .= "&power99=$power99_clean";
}

$beat = assignvalue($_POST['beat'], $_GET['beat'], "");
if($beat){
	$beat_clean = space20($beat);
	$addsql .= "AND beat = '$beat' ";
	$headlineadd .= "beat - $beat ";
	$paginationadd .= "&beat=$beat_clean";
}





$future = assignvalue($_POST['future'], $_GET['future'], "");
$today = date("Y-m-d");
if($future){
	$addsql .= " AND releasedate > '$today'";
//	$addsql .= " AND releasedate > '0000-00-00 00:00:00'";
	$addsql .= " order by releasedate ASC";
}
else{
	$addsql .= " AND releasedate <= '$today'";
	$addsql .= " order by releasedate DESC";
}

$limit = assignvalue($_POST['limit'], $_GET['limit'], "100");
if($limit){
	$addsql .= " limit $limit";
}

$offset = assignvalue($_POST['offset'], $_GET['offset'], "");
if($offset){
	$addsql .= " offset $offset";
}

$sql = "
SELECT *
FROM games
WHERE title=title
$addsql

";

$result = mysql_query($sql) or die($sql);

while($row = mysql_fetch_array($result)){
	$cell = gamecell($row, "gamecell");
	$cells .= $cell;
}

$totalrows = mysql_num_rows($result);

//pagination
$shownext = false;
$showprev = false;

if($totalrows==$limit){
	$shownext=true;
}

if($offset>0){
	$showprev = true;
}



?>

<html>
<head>
<title>1up Guide</title>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon" />

</head>

<body>

<div class="container">
	<div class="col-lg-3">

	<?php include('left.php'); ?>

	</div>
	<div class="col-lg-8">
		<?php echo $cells; ?>
	</div>

	<?php
	if($shownext){
		$offsetnext = $offset + $limit;
		echo "<a href=index.php?offset=$offsetnext$paginationadd>Next</a>";
	}

	if($showprev){
		$offsetprev = $offset - $limit;
		echo " <a href=index.php?offset=$offsetprev$paginationadd>Prev</a>";
	}
	?>
</div>


<?php
include('footer.php');
?>