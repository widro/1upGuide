<?php
$thisurl =  $_SERVER['HTTP_HOST'];

if(($thisurl=="www.widroverse.com")||($thisurl=="widroverse.com")){
	$link = mysqli_connect("internal-db.s222827.gridserver.com", "db222827", "llFt[8H,1d", "db222827_widroverse");
}
else{
	$link = mysqli_connect("localhost", "root", "", "widroverse");
}



// get bands

$sqlband = "

SELECT DISTINCT band

FROM playlists

ORDER BY band

";



$resultband = mysqli_query($link, $sqlband);

$i=0;

$displayband .= "<option>-- select one -- </option>";



while($rowband = mysqli_fetch_array($resultband)){

	$band = $rowband['band'];

	$displayband .= "<option>$band</option>";

}





?>



<html>

<head>

<title>94.6 WJDW - Mango Radio - The Only New Rock In New York City</title>





</head>


<body>

<style>
body{
	background:#000000;
	color:#ffffff;

}

a{
	color:#cccccc;
	text-decoration:none;

}

a:hover{
	color:#ff0000;
	text-decoration:underline;
}

</style>


<center>

<script type="text/javascript"><!--

google_ad_client = "pub-9381773425456350";

google_ad_width = 728;

google_ad_height = 90;

google_ad_format = "728x90_as";

google_ad_type = "text_image";

google_ad_channel ="7492326143";

google_color_border = "333333";

google_color_bg = "000000";

google_color_link = "FFFFFF";

google_color_url = "999999";

google_color_text = "CCCCCC";

//--></script>

<script type="text/javascript"

  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">

</script>



<br>

<img src=wjdw.gif>

<br><br>

MANGO RADIO

<br><br>

Playlists:

<a href=index.php?year=2019>2019</a> |

<a href=index.php?year=2018>2018</a> |

<a href=index.php?year=2017>2017</a> |

<a href=index.php?year=2016>2016</a> |

<a href=index.php?year=2015>2015</a> |

<a href=index.php?year=2014>2014</a> |

<a href=index.php?year=2013>2013</a> |

<a href=index.php?year=2012>2012</a> |

<a href=index.php?year=2011>2011</a> |

<a href=index.php?year=2010>2010</a> |

<a href=index.php?year=2009>2009</a> |

<a href=index.php?year=2008>2008</a> |

<a href=index.php?year=2007>2007</a> |

<a href=index.php?year=2006>2006</a> |

<a href=index.php?year=2005>2005</a> |

<a href=index.php?year=2004>2004</a> |

<a href=index.php?year=2003>2003</a> |

<a href=index.php?year=2002>2002</a> |

<a href=index.php?year=2001>2001</a> |

<a href=index.php?year=2000&active=2>2000</a> |

<a href=index.php?year=1999&active=2>1999</a>



<a href=stats.php>Stats</a>

<br><br>





Search by Band:

<form action=band.php method=get>

<select name=b>

<?=$displayband?>

</select>

<input type=submit name=Search>

</form>

<br><br>