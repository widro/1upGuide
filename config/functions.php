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
$link = mysqli_connect("localhost", "root", "", "1upguide");

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

	$result = mysqli_query($link, $sql) or die($sql);

	while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
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
$link = mysqli_connect("localhost", "root", "", "1upguide");
	$sql = "
	SELECT systemcode
	FROM systems
	WHERE system = '$system'
	LIMIT 1
	";

	$result = mysqli_query($link, $sql) or die($sql);

	while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
		return $row['systemcode'];
	}
}

function get_system($systemcode){
$link = mysqli_connect("localhost", "root", "", "1upguide");
	$sql = "
	SELECT system
	FROM systems
	WHERE systemcode = '$systemcode'
	LIMIT 1
	";

	$result = mysqli_query($link, $sql) or die($sql);

	while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
		return $row['system'];
	}
}



?>