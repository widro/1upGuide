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
		<div class="col-lg-4" style="background:#ff0000; height:300px;margin-bottom:10px;">



		</div>

		<div class="col-lg-4" style="background:#00ff00; height:300px;margin-bottom:10px;">



		</div>

		<div class="col-lg-4" style="background:#0000ff; height:300px;margin-bottom:10px;">



		</div>

	</div>
	<div class="col-lg-12">
		<div class="col-lg-4" style="background:#ff0000; height:300px;margin-bottom:10px;">



		</div>

		<div class="col-lg-4" style="background:#00ff00; height:300px;margin-bottom:10px;">



		</div>

		<div class="col-lg-4" style="background:#0000ff; height:300px;margin-bottom:10px;">



		</div>

	</div>
	<div class="col-lg-12">
		<div class="col-lg-4" style="background:#ff0000; height:300px;margin-bottom:10px;">



		</div>

		<div class="col-lg-4" style="background:#00ff00; height:300px;margin-bottom:10px;">



		</div>

		<div class="col-lg-4" style="background:#0000ff; height:300px;margin-bottom:10px;">



		</div>

	</div>
</div>

</body>
</html>