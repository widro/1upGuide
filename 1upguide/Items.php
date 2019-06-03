<?php

include('config/dbconnect.php');

class Items{

	function list_items($allfields, $dbtable, $params, $limit, $offset, $link, $sortby){

		//declare some vars
		$sqladd = "";
		$selectlist = "select ";
		$all = array();

		//build select
		foreach($allfields as $eachfield){
			$selectlist .= $eachfield . ", ";
		}
		//trim last ,
		$selectlist = substr($selectlist, 0, -2);

		//build sql
		if(count($params)>0){
			foreach($params as $params_key => $params_value){
				if($params_value=="showanyvalue"){
					$sqladd .= "and " . $params_key . " != ''";
				}
				else{
					$sqladd .= "and " . $params_key . " = '".$params_value."'";
				}
			}
		}


		$today = date("Y-m-d");

		if($sortby==""){
			$sortby = $allfields[1] . " DESC";
		}

		//and releasedate <= '".$today."'
		$sql = "
		$selectlist
		FROM ".$dbtable."
		where 1 = 1
		$sqladd
		order by $sortby
		limit $limit offset $offset
		";

		$result = mysqli_query($link, $sql);

		while($row=mysqli_fetch_array($result, MYSQLI_BOTH)){
			$thisarray = array();
			foreach($allfields as $thisfield){
				$$thisfield = $row[$thisfield];
				$thisarray[$thisfield] = $$thisfield;
			}


			$all[] = $thisarray;
		}

		return $all;
	}

	function list_titles($dbtable, $limit, $link){


		$output = array();

		if(!$limit){
			$limit = "10";
		}

		$idtoquery = $dbtable . "_id";

		$sql = "
		SELECT $idtoquery as id, title
		FROM $dbtable
		ORDER by title ASC
		limit $limit
		";

		$result = mysqli_query($link, $sql);

		while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
			$entry[] = array();
			$entry['id'] = $row['id'];
			$entry['title'] = $row['title'];
			$output[] =$entry;
		}

		return $output;
	}
	function list_parameter($dbtable, $parameter, $limit, $link){


		$output = array();

		if(!$limit){
			$limit = "10";
		}

		if(!$parameter){
			$parameter = "developer";
		}

		$sql = "
		SELECT distinct($parameter), count($parameter) as total
		FROM $dbtable
		GROUP BY $parameter
		ORDER BY total DESC
		limit $limit
		";

		$result = mysqli_query($link, $sql);

		if($result){
			while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
				$entry[] = array();
				$entry['parameter'] = $row[$parameter];
				$entry['total'] = $row['total'];
				$output[] =$entry;
			}
		}

		return $output;
	}


	function get_item_by_id($allfields, $dbtable, $id, $link){
		$sqladd = "";
		$selectlist = "select ";

		foreach($allfields as $eachfield){
			$selectlist .= $eachfield . ", ";
		}

		$selectlist = substr($selectlist, 0, -2);

		$sql = "
		$selectlist
		FROM $dbtable
		where $allfields[0] = '$id'
		limit 1
		";

		$result = mysqli_query($link, $sql);

		while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
			foreach($allfields as $thisfield){
				$$thisfield = $row[$thisfield];
				$return[$thisfield] = $$thisfield;
			}
		}

		return $return;
	}

	function get_table_fields($dbtable, $link2, $dbname1){
		$sql = "
		select column_name from columns
		where table_schema = '$dbname1'
		and table_name = '$dbtable'
		order by ordinal_position,table_name
		";

		$result = mysqli_query($link2, $sql);

		while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
			$return[] = $row['column_name'];
		}

		return $return;
	}


}

?>