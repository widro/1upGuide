<?php
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

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

<link rel="shortcut icon" href="/1upguide/favicon.ico" type="image/vnd.microsoft.icon" />

</head>

<body>
<?php include('components/menu.php'); ?>


<div class="container">
	<?php include('components/leftsidebar.php'); ?>
	<div class="col-lg-10">
<?php

	$id = $_GET['id'];
	$items = new Items;
	$get_item_by_id = $items->get_item_by_id($allfields, $dbtable, $id, $link);


	$id = $get_item_by_id['id'];
	$title = $get_item_by_id['title'];
	$boxfront = $get_item_by_id['boxfront'];
	if($boxfront==""){
		$boxfront = "images/NSMBWii1upMushroom.png";
	}

	$get_item_by_id_output = "";
	//build select
	foreach($allfields as $eachfield){
		$thisvalue = $get_item_by_id[$eachfield];
		$get_item_by_id_output .= "
			$eachfield: <a href='index.php?brands_id=$brands_id&$eachfield=$thisvalue'>$thisvalue</a><br>
		";

	}

	echo'
		<h1>'.$title.'</h1>
		<div class="col-lg-3 col-md-4 col-xs-6 thumb" style="height:350px">
            <img class="img-responsive quicktickbutton" src="http://widroverse.com/1upguide/'.$boxfront.'" alt="" id="id'.$id.'|cat2|level_complete" alt="'.$title.'">
        </div>
		<div class="col-lg-9 col-md-8 col-xs-6 thumb" style="height:350px">
		'.$get_item_by_id_output.'



        </div>
		';


?>
<hr>
<h3>Screenshots</h3>




<hr>

<h3>Videos</h3>














	</div>


</div>
</div>

</body>
</html>