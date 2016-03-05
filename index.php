<?php
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

$thisurl =  $_SERVER['HTTP_HOST'];

if(($thisurl=="www.wjdw.com")||($thisurl=="wjdw.com")){
	$dbname = "db54729_1upguide";
	$connection = mysql_connect("internal-db.s54729.gridserver.com", "db54729", "O47jhg(%vfoyh") or die("Couldn't connect.");
}
else{
	$dbname = "1upguide";
	$connection = mysql_connect("localhost", "root", "") or die("Couldn't connect.");
}
$db = mysql_select_db($dbname) or die("Couldn't select database");
?><html>
<head>

<title>1upGuide</title>
<style>
body{
	font-family:verdana;
	font-size:12px;
	margin:0;
	padding:0;
	background:#000000;
}

a{
	color: #84ff00;
	text-decoration:none;
}

a:hover{
	text-decoration:underline;

}

.clear{
	clear:both;
}


.h1, h2, h3, h4, h5{
	color:#00e225;
}

li{
	list-style:none;
}

.header_wrap{
	width:100%;
	height:30px;
	background:#666666;

}

.header_inner{
	width:1200px;
	height:30px;
	background:#666666;
	margin:0 auto;
	text-align:right;

}


.header_inner h1{
	color:#ffffff;
	font-weight:bold;
	font-size:50px;
	margin:0px;
	padding-top:30px;
	padding-left:30px;

}

.rightsidebar{
	width:100%;
	height:40px;
	background:#444444;
	padding:10px;
	color:#ffffff;
	font-size:18px;
	font-weight:bold;

}


.rightsidebar h2{
	color:#0000ff;
}




.body_wrap{
	width:100%;

}

.body_inner{
	width:1300px;
	margin:0 auto;
	min-height:2000px;
	height:auto; #important
}



.leftside{
	width:300px;
	height:4000px;
	float:left;
}

.rightside{
	width:1000px;
	height:4000px;
	float:right;

}


.leftside_cell{
	width:200px;
	padding:5px;
	background:#6C9966;
	border:20px solid #92f23c;
	margin-bottom:20px;
	height:auto; #important
}


.leftside_cell h2{
	font-size:16px;
	padding:5px;
	background:#999900;
	color: #84ff00;
}

.leftside_cell a{

}

.leftside_cell ul{
	margin:0;
	padding:0;
}

.leftside_cell li{

}


.leftside_filter{
	width:210px;
	min-height:300px;
	height:auto; #important
	text-align:center;
	background:#6C9966;
	border:20px solid #92f23c;
}


.leftside_filter select{
	font-size:14px;
	padding:5px;
	width:200px;

}


.leftside_filter h2{
	padding:5px;
	width:200px;
	text-align:center;
	margin:0;
}


.leftside_filter input{
	font-size:14px;
	background:#ffffff;
	border:3px solid #63b400;
	cursor:pointer;
	padding:5px;

}







div.gamecell{
	width:160px;
	height:210px;
	padding:10px;
	float:left;
	margin:5px;
	text-align:center;
	background:#6C9966;
	border:20px solid #92f23c;
}

div.gamecell:hover{
	background:#CCE3AF;
}

.gamecell img{
	height:150px;
}


.gamecell a{
	color:#000000;
	font-size:16px;
	font-weight:bold;
}

.gamecell a:hover{
	text-decoration:underline;
}












.footer_wrap{
	width:100%;
	height:150px;
	background:#000000;

}

.footer_inner{
	width:90%;
	height:150px;
	background:#666666;
	margin:0 auto;
	text-align:center;

}












.dc{
	width:250px;
	//height:200px;
}

.ps3{
	width:250px;
	//height:200px;
}


.arc{
	width:250px;
	//height:200px;
}


.x360{
	width:250px;
	//height:200px;
}


.psp{
	width:250px;
	//height:200px;
}


.gen{
	width:250px;
	//height:200px;
}


.gc{
	width:250px;
	//height:200px;
}


.ps2{
	width:250px;
	//height:200px;
}


.ps1{
	width:250px;
	//height:200px;
}


.psm{
	width:250px;
	//height:200px;
}


.nds{
	width:250px;
	//height:200px;
}


.psv{
	width:250px;
	//height:200px;
}


.gba{
	width:250px;
	//height:200px;
}


.wii{
	width:250px;
	//height:200px;
}


.xb{
	width:250px;
	//height:200px;
}


.wiiw{
	width:250px;
	//height:200px;
}


.wiiu{
	width:250px;
	//height:200px;
}


.lyn{
	width:250px;
	//height:200px;
}


.3ds{
	width:250px;
	//height:200px;
}


.n64{
	width:250px;
	//height:200px;
}


.snes{
	width:250px;
	//height:200px;
}


.nes{
	width:250px;
	//height:200px;
}


.sat{
	width:250px;
	//height:200px;
}


.sms{
	width:250px;
	//height:200px;
}


.tg16{
	width:250px;
	//height:200px;
}


.3do{
	width:250px;
	//height:200px;
}


.gg{
	width:250px;
	//height:200px;
}


.neo{
	width:250px;
	//height:200px;
}


.vb{
	width:250px;
	//height:200px;
}


.pc{
	width:250px;
	//height:200px;
}


.jag{
	width:250px;
	//height:200px;
}


.ngp{
	width:250px;
	//height:200px;
}


.gb{
	width:250px;
	//height:200px;
}


.gbc{
	width:250px;
	//height:200px;
}


.jcd{
	width:250px;
	//height:200px;
}


.scd{
	width:250px;
	//height:200px;
}


.32x{
	width:250px;
	//height:200px;
}


</style>
<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon" />

</head>
<body>
<div class="header_wrap">
	<div class="header_inner">
		<a href="/">Home</a>
		<a href="/">Home</a>
		<a href="/">Home</a>
		<a href="/">Home</a>
		<a href="/">Home</a>
	</div>
</div>
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

$result = mysql_query($sql) or die($sql);

while($row = mysql_fetch_array($result)){
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

$result = mysql_query($sql) or die($sql);

while($row = mysql_fetch_array($result)){
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

$result = mysql_query($sql) or die($sql);

while($row = mysql_fetch_array($result)){
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

	<div class="leftside_cell">
		<h2><a href="index.php?power99=yes">POWER99</a></h2>
		<h2><a href="index.php?future=yes">FUTURE</a></h2>
	</div>


</div>

<?php
//end master index/game switch
}

?>

<div class="clear"></div>
	</div>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-396064-19']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>









<?php
//functions
function gamecell($gamearray, $type){
	$gameid = $gamearray['gameid'];
	$releasedate = $gamearray['releasedate'];
	$title = $gamearray['title'];
	$system = $gamearray['system'];
	$playableon = $gamearray['playableon'];
	$status = $gamearray['status'];
	$franchise = $gamearray['franchise'];
	$developer = $gamearray['developer'];
	$publisher = $gamearray['publisher'];
	$genre = $gamearray['genre'];
	$notes = $gamearray['notes'];

	//images
	$boxfront = $gamearray['boxfront'];
	$boxback = $gamearray['boxback'];
	$thumbnail = $gamearray['thumbnail'];
	$rectangle = $gamearray['rectangle'];

	//blank image replaces
	if(!$boxfront){
		$thisrand = rand(1,5);
		$boxfront = "/images/boxfront" . $thisrand . ".jpg";
	}
	if(!$boxback){
		$boxback = "";
	}
	if(!$thumbnail){
		$thumbnail = "";
	}
	if(!$rectangle){
		$rectangle = "";
	}


	if($type=="gamecell"){
		$cell = "
		<div class=\"gamecell\">
			<a href=index.php?gameid=$gameid>
				<img class=\"boxfront\"src=\"$boxfront\"><br>
				$title
			</a>
		</div>

		";
	}

	elseif($type=="row"){
		$cell = "
		<div class=\"gamerow\">
			<a href=index.php?gameid=$gameid>$title</a> ($releasedate)
		</div>

		";
	}

	elseif($type=="single"){
		$cell = "

			<img src=\"$boxfront\">

			<h1>$title</h1>

			<h2><a href=index.php?system=$system>$system</a></h2>

			<h4>Release Date: $releasedate</h4>
			<h4>Playable On: $playableon</h4>
			<h4>Franchise: <a href=index.php?franchise=$franchise>$franchise</a></h4>
			<h4>Developer: <a href=index.php?developer=$developer>$developer</a></h4>
			<h4>Publisher: <a href=index.php?publisher=$publisher>$publisher</a></h4>
			<h4>Genre: <a href=index.php?genre=$genre>$genre;</a></h4>

			<h4>Notes: $notes</h4>
			<h4>Power99: $power99</h4>
			<h4>Beat: $beat</h4>

		";
	}

	return $cell;
}




function assignvalue($var, $var2 = "", $default){
	if(!$var){
		if(!$var2){
			$var = $default;
		}
		else{
			$var = $var2;
		}
	}
	return $var;
}

function getunique($type, $sort){

	$output = array();

	if(!$type){
		$type = "developer";
	}

	$sql = "
	SELECT distinct($type), count($type) as total
	FROM games
	GROUP BY $type
	ORDER BY total DESC
	";

	$result = mysql_query($sql) or die($sql);

	while($row = mysql_fetch_array($result)){
		$entry[] = array();
		$entry['item'] = $row[$type];
		$entry['total'] = $row['total'];
		$output[] =$entry;
	}

	return $output;
}


function buildlist($array, $type, $param){

	foreach($array as $eacharray){
		$item = $eacharray['item'];
		$total = $eacharray['total'];
		$itemlink = space20($item);
		if($type=="dd"){
			$dd .= "<option value=\"$item\">$item ($total)</option>";
		}
		elseif($type=="list"){
			$dd .= "<li><a href=\"index.php?system=$itemlink\">$item</a></li>
			";
		}
		//$dd1 .= "INSERT INTO systems (system, systemcode) VALUES ('$item',  'xxx');";

	}

	return $dd;
}

function space20($val){
	return str_replace(" ", "%20", $val);
}


function get_systemcode($system){
	$sql = "
	SELECT systemcode
	FROM systems
	WHERE system = '$system'
	LIMIT 1
	";

	$result = mysql_query($sql) or die($sql);

	while($row = mysql_fetch_array($result)){
		return $row['systemcode'];
	}
}

function get_system($systemcode){
	$sql = "
	SELECT system
	FROM systems
	WHERE systemcode = '$systemcode'
	LIMIT 1
	";

	$result = mysql_query($sql) or die($sql);

	while($row = mysql_fetch_array($result)){
		return $row['system'];
	}
}



?>