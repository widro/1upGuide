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

<script src="/ticks/js/main.js"></script>
<link rel='stylesheet' id='admin-bar-css'  href='/ticks/css/mainstyles.css' type='text/css' media='all' />






</head>

<body>
<?php include('components/menu.php'); ?>




<?php


	$params = array(developer=>'nintendo', genre=>'2d_platform');


	$game = new Game;
	$allgames = $game->list_games($params, $limit, $offset);

	foreach($allgames as $thisgame){
		$gameid = $thisgame['gameid'];
		$title = $thisgame['title'];
		$boxfront = $thisgame['boxfront'];

		echo'
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive quicktickbutton" src="'.$boxfront.'" alt="" id="id'.$gameid.'|cat2|level_complete" alt="'.$title.'" style="height:250px;">
                </a>
            </div>
			';
	}

?>






</body>
</html>