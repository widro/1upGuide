<?php
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

if($_GET['setviewstyle']){
	setcookie("viewstyle", $_GET['setviewstyle'], time()+3600000);  /* expire in 1 hour */
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
include('config/dbconnect.php');
include('Items.php'); 

//brand info
$brands_id=1;
if($_GET['brands_id']){
	$brands_id = $_GET['brands_id'];
}

$brandsfields = array('brands_id','releasedate', 'title', 'status', 'boxfront', 'elite', 'ranking');

$items = new Items;
$brandinfo = $items->get_item_by_id($brandsfields, "brands", $brands_id, $link);

$brandname = $brandinfo['title'];
$brandlogo = $brandinfo['boxfront'];
$dbtable = $brandinfo['status'];
$favicon = $brandinfo['favicon'];
$allfields = $items->get_table_fields($dbtable, $link2, $dbname1);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>
<html>
<head>
<title><?php echo $brandname; ?></title>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="shortcut icon" href="" type="image/vnd.microsoft.icon" />

</head>

<body>
<?php include('components/menu.php'); ?>


<div class="container">















	
	<div class="col-lg-12">
<?php



//check type of view from cookie
if($_GET['setviewstyle']){
	$viewstyle = $_GET['setviewstyle'];
}
elseif(isset($_COOKIE['viewstyle'])){
	$viewstyle = $_COOKIE["viewstyle"];
}
else{
	$viewstyle = "grid";
}





	$params = array();



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


	$items = new Items;
	$allitems = $items->list_items($allfields, $dbtable, $params, $limit, $offset, $link, $sortby);
	$totalitems = count($allitems);

	foreach($allitems as $thisitem){
		$id = $thisitem[$allfields[0]];
		$title = $thisitem['title'];
		$boxfront = $thisitem['boxfront'];
		if($boxfront==""){
			$boxfront = "images/NSMBWii1upMushroom.png";
		}
		if($viewstyle == "grid"){
		echo'
			<div class="col-lg-3 col-md-4 col-xs-6 thumb" style="height:350px">
                <a class="thumbnail" href="view.php?brands_id='.$brands_id.'&id='.$id.'">
                    <img class="img-responsive quicktickbutton" src="http://widroverse.com/1upguide/'.$boxfront.'" alt="" id="id'.$id.'|cat2|level_complete" alt="'.$title.'">
                    <br>
                    '.$title.'
                </a>
            </div>
			';
		}

		elseif($viewstyle == "basiclist"){
		echo'
			<div class="col-lg-12 col-md-12 col-xs-12">
                <a href="view.php?id='.$id.'">
                    '.$title.'
                </a>
            </div>
			';
		}

	}

	echo '
	<div class="clear" style="clear:both;"></div>
	';


	//show next
	if($limit==$totalitems){
		$offsetnext = $offset+$limit;
		echo '
		<a href="index.php?offset='.$offsetnext.'&limit='.$limit.$queryvars.'">   NEXT   </a>
		';
	}

	//show next
	if($offset>0){
		$offsetprev = $offset-$limit;
		echo '
		<a href="index.php?offset='.$offsetprev.'&limit='.$limit.$queryvars.'">   PREVIOUS   </a>
		';
	}





?>
</div>
</div>

</body>
</html>