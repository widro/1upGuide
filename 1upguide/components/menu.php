<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><a href="/"><img src="images/NSMBWii1upMushroom.png" style="" height="25" align=left border=0></a>1upGuide</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="listing.php">Listing</a></li>


			<?php
				$game = new Game;
				$menu_types = array('system', 'genre', 'developer', 'publisher', 'franchise', 'status');

				foreach($menu_types as $type){
					echo '
			        <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="text-transform: capitalize;">'.$type.' <span class="caret"></span></a>
					<ul class="dropdown-menu">
					';
					$parameters = $game->list_parameter($type, 20);
					foreach($parameters as $entry){
						echo "<li><a href=\"/listing.php?".$type."=".$entry['parameter']."\">".$entry['parameter']." (".$entry['total'].")</a></li>";
					}
					echo "</ul></li>";
				}
			?>
        


      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Widroverse Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tools <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="all.php">All</a></li>
            <li><a href="generic.php">Generic</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Excel Paste</a></li>
            <li><a href="#">Fix Up Tick Data</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Schedule Items</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
