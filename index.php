<?php
//db connect
$servername = "internal-db.s222827.gridserver.com";
$database = "db222827_widroverse";
$username = "db222827";
$password = "llFt[8H,1d";

$conn = mysqli_connect($servername, $username, $password, $database);

//first get date of most recent mix
$sql_mixdate = "
select date
from playlists
order by date desc
limit 1
";

$result_mixdate = mysqli_query($conn, $sql_mixdate);

while($row_mixdate = mysqli_fetch_array($result_mixdate)) {
	$mixdate = $row_mixdate['date'];
}

//get mix items
$sql_mixitems = "
SELECT id, track, mix, band, song, type, volume, active
FROM playlists
WHERE date = '$mixdate'

";

$result_mixitems = mysqli_query($conn, $sql_mixitems);

$output_mixes = "<ul>";
while($row_mixitems = mysqli_fetch_array($result_mixitems)) {
	$mixdate = $row_mixitems['date'];
	$id = $row_mixitems['id'];
	$track = $row_mixitems['track'];
	$mix = $row_mixitems['mix'];
	$band = $row_mixitems['band'];
	$song = $row_mixitems['song'];
	$type = $row_mixitems['type'];
	$volume = $row_mixitems['volume'];
	$active = $row_mixitems['active'];

	if($type=='1'){
		$output_mixes .= "<li><font color=blue>$track - $song ($band)</font></li>";
	}
	elseif($type=='2'){
		$output_mixes .= "<li><font color=ff6600>$track - $song ($band)</font></li>";
	}
	elseif($type=='3'){
		$output_mixes .= "<li><font color=ff0000>$track - $song ($band)</font></li>";
	}
	else{
		$output_mixes .= "<li>$track - $song ($band)</li>";
	}
}
$output_mixes .= "</ul>";



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



	<link rel="icon" href="/images/widroverseicon64.png" />

    <title>Widroverse2019</title>
  </head>
  <body>


  	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link" href="#"><img src="/images/widroverselogo150h.png" class="img-fluid" style="max-height:40px;"></a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="/wjdw/"><img src="/images/kjdw_logo640.png" class="img-fluid" style="max-height:40px;"></a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link active" href="#">Active</a>
	  </li>
	  <li class="nav-item dropdown">
	    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
	    <div class="dropdown-menu">
	      <a class="dropdown-item" href="#">Action</a>
	      <a class="dropdown-item" href="#">Another action</a>
	      <a class="dropdown-item" href="#">Something else here</a>
	      <div class="dropdown-divider"></div>
	      <a class="dropdown-item" href="#">Separated link</a>
	    </div>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#">Link</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link disabled" href="#">Disabled</a>
	  </li>
	</ul>




  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="max-height:800px;overflow-y:hidden;">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="/images/agentsofmayhem.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="/images/IMG_4572.JPG" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="/images/The-Legend-of-Zelda-Breath-of-the-Wild-Gameplay-4-FEATURED.jpg" alt="Third slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>




    <div class="container">
		<div class="row">
			<h1>Welcome to Widroverse!</h1>
			<p>dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs </p>
		</div>
    </div>

    <div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2>Scorching Games</h2>
				<img src="/images/Scorching-games.jpg" class="img-fluid">
				<br><br>
				<p>dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs </p>


			</div>
			<div class="col-lg-4">
				<h2>Olive Wood Bistro</h2>
				<img src="/images/olivewoodbistro_logo20190517.jpg" class="img-fluid">
				<p>dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs dksjfh lksjah fljkash flkjsh flkjsh dlfkjhs </p>


			</div>
			<div class="col-lg-4">
				<h2>KJDW</h2>
				<img src="/images/kjdw_logo640.png" class="img-fluid">
				<?php echo $output_mixes; ?>

			</div>
		</div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
