<?php include('Game.php'); ?>















<?php

	$game = new Game;
	$allgames = $game->list_games();

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