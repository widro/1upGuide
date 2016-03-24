<?php

include('config/dbconnect.php');

class Game{


	function list_games(){

		$all_games = array();

		$sql_game = "
		select * from games
		where 1 = 1
		order by game_id DESC
		";

		$result_game = mysql_query($sql_game);

		while($row_game=mysql_fetch_array($result_game)){
			$game_id = $row_game['game_id'];
			$game_name = $row_game['game_name'];
			$game_image = $row_game['game_image'];
			$status = $row_game['status'];

			$all_games[] = array('game_id'=>$game_id, 'game_name'=>$game_name, 'game_image'=>$game_image, 'status'=>$status);
		}

		return $all_games;
	}

	function get_game_by_id($game_id){
		$sql_game = "
		select * from games
		where game_id = '$game_id'
		limit 1
		";

		$result_game = mysql_query($sql_game);

		while($row_game=mysql_fetch_array($result_game)){
			$game_id = $row_game['game_id'];
			$game_name = $row_game['game_name'];
			$game_image = $row_game['game_image'];
			$status = $row_game['status'];
			$return_game = array('game_id'=>$game_id, 'game_name'=>$game_name, 'game_image'=>$game_image, 'status'=>$status);
		}

		return $return_game;
	}


}

?>