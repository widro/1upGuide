<?php

//temp functions
include('functions.php');

//dbconnect
include('version2/dbconnect.php');


$gameid = $_GET['gameid'];

if(!gameid){
	header('/');
	exit();
}

$sql = "
SELECT *
FROM games
WHERE gameid = '$gameid'
limit 1
";

$result = mysql_query($sql) or die($sql);

while($row = mysql_fetch_array($result)){
	$cells = gamecell($row, "single");
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