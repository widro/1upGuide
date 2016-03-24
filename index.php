<?php
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
?>
<?php include('Game.php'); ?>
<?php include('config/functions.php'); ?>
<?php include('components/header.php'); ?>
<?php //include('components/menu.php'); ?>


<div class="body_wrap">
	<div class="body_inner">
<?php

//master index game switch, show game
if($_GET['gameid']){
$gameid = assignvalue($_GET['gameid'], "", "1");

$sql = "
SELECT *
FROM games
WHERE gameid = '$gameid'
limit 1;
";

$result = mysqli_query($link, $sql) or die($sql);

while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
	$single = gamecell($row, "single");
	$franchise = $row['franchise'];
	$genre = $row['genre'];

}

echo $single;

?>



<h2>Related Games by Franchise:</h2>
<?php
$sql = "
SELECT gameid, title, system, boxfront
FROM games
WHERE franchise='$franchise'
order by releasedate DESC
limit 10;
";

$result = mysqli_query($link, $sql) or die($sql);

while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
	$cell = gamecell($row, "gamecell");
	$cells .= $cell;
}
	echo $cells;

?>

<div class="clear"></div>


<h2>Related Games by Genre:</h2>
<?php
$sql = "
SELECT gameid, title, system, boxfront
FROM games
WHERE genre='$genre'
order by releasedate DESC
limit 10;
";

$result = mysqli_query($link, $sql) or die($sql);

while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
	$cell = gamecell($row, "gamecell");
	$cells2 .= $cell;
}
	echo $cells2;

$developers = getunique('developer', 'default');
$developersdd = buildlist($developers, "dd", "developer");

$publishers = getunique('publisher', 'default');
$publishersdd = buildlist($publishers, "dd", "publisher");

$systems = getunique('system', 'default');
$systemsdd = buildlist($systems, "dd", "system");
$systemslist = buildlist($systems, "list", "system");

$franchises = getunique('franchise', 'default');
$franchisesdd = buildlist($franchises, "dd", "franchise");
$franchiseslist = buildlist($franchises, "list", "franchise");

$genres = getunique('genre', 'default');
$genresdd = buildlist($genres, "dd", "genre");
$genreslist = buildlist($genres, "list", "genre");

$statuss = getunique('status', 'default');
$statussdd = buildlist($statuss, "dd", "status");



// master index game switch, change to index
} else{

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

echo $sql;

$result = mysqli_query($link, $sql) or die($sql);

while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
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

<div class="rightside">

	<div class="rightsidebar">
		<?php echo $headlineadd ?>
	</div>

	<?php echo $cells; ?>


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

$developers = getunique('developer', 'default');
$developersdd = buildlist($developers, "dd", "developer");

$publishers = getunique('publisher', 'default');
$publishersdd = buildlist($publishers, "dd", "publisher");

$systems = getunique('system', 'default');
$systemsdd = buildlist($systems, "dd", "system");
$systemslist = buildlist($systems, "list", "system");

$franchises = getunique('franchise', 'default');
$franchisesdd = buildlist($franchises, "dd", "franchise");
$franchiseslist = buildlist($franchises, "list", "franchise");

$genres = getunique('genre', 'default');
$genresdd = buildlist($genres, "dd", "genre");
$genreslist = buildlist($genres, "list", "genre");

$statuss = getunique('status', 'default');
$statussdd = buildlist($statuss, "dd", "status");

?>
<div class="leftside">


	<div class="leftside_cell">
		<a href="/"><img src="images/NSMBWii1upMushroom.png" style="" height="150" align=left border=0></a><h1>1up Guide!</h1>
	</div>


	<div class="leftside_cell">
		<h2>Welcome!</h2>
		<p>1up Guide is the personal video game collection of <a href="http://widro.com">Jonathan Widro</a>. It is sortable by many parameters in the search below. More video game sorting to come!
	</div>

	<div class="leftside_filter">

		<h2>Filters</h2>
		<form method="get">

		<select name="developer" id="developer">
			<option value="">--- developer --</option>
			<?php echo $developersdd; ?>
		</select>

		<select name="publisher" id="publisher">
			<option value="">--- publisher --</option>
			<?php echo $publishersdd; ?>
		</select>

		<select name="year" id="year">
			<option value="">--- year --</option>
			<?php
				for($i=2014;$i>1975;$i--){
					echo "<option value=\"".$i."\">".$i."</option>
					";
				}


			?>
		</select>

		<select name="system" id="system">
			<option value="">--- system --</option>
			<?php echo $systemsdd; ?>
		</select>


		<select name="franchise" id="franchise">
			<option value="">--- franchise --</option>
			<?php echo $franchisesdd; ?>
		</select>

		<select name="genre" id="genre">
			<option value="">--- genre --</option>
			<?php echo $genresdd; ?>
		</select>

		<select name="status" id="status">
			<option value="">--- status --</option>
			<?php echo $statussdd; ?>
		</select>

		<input type="submit" value="Filter" id="filterbtn" name="filterbtn">

		</form>
	</div>


</div>

<?php
//end master index/game switch
}

?>

<?php include('components/footer.php'); ?>
