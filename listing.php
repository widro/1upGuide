<?php
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
?>
<?php include('Game.php'); ?>
<html>
<head>
<title>1upGuide</title>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</head>

<body>
<?php include('components/menu.php'); ?>

<?php
	$params = array();

	$allfields = array('gameid','releasedate','title','system','status','franchise','developer','publisher','genre','boxfront','beaten','currentbacklog','backlog','neon','twodee','retro','neoncade','elite','eliterank','the20v2');

	foreach($allfields as $thisfield){
		if($_GET[$thisfield]){
			$params[$thisfield] = $_GET[$thisfield];
			$queryvars .= '&'. $thisfield . '=' . $_GET[$thisfield];
		}
	}

	if($_GET["offset"]){
		$offset = $_GET["offset"];
	}
	else{
		$offset = 0;
	}


	if($_GET["limit"]){
		$limit = $_GET["limit"];
	}
	else{
		$limit = 100;
	}


	$game = new Game;
	$allgames = $game->list_games($params, $limit, $offset);
	$totalgames = count($allgames);

	foreach($allgames as $thisgame){
		$gameid = $thisgame['gameid'];
		$title = $thisgame['title'];
		$boxfront = $thisgame['boxfront'];

		echo'
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive quicktickbutton" src="'.$boxfront.'" alt="" id="id'.$gameid.'|cat2|level_complete" alt="'.$title.'" style="height:250px;">
                    <br>
                    '.$title.'
                </a>
            </div>
			';
	}

	echo '
	<div class="clear" style="clear:both;"></div>
	';


	//show next
	if($limit==$totalgames){
		$offsetnext = $offset+$limit;
		echo '
		<a href="listing.php?offset='.$offsetnext.'&limit='.$limit.$queryvars.'">   NEXT   </a>
		';
	}

	//show next
	if($offset>0){
		$offsetprev = $offset-$limit;
		echo '
		<a href="listing.php?offset='.$offsetprev.'&limit='.$limit.$queryvars.'">   PREVIOUS   </a>
		';
	}





?>


</body>
</html>