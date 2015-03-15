<?php



$developers = getunique('developer', 'default');
$developersdd = buildlist($developers, "dd", "developer");

$publishers = getunique('publisher', 'default');
$publishersdd = buildlist($publishers, "dd", "publisher");

$systems = getunique('system', 'default');
$systemsdd = buildlist($systems, "dd", "system");
$systemslist = buildlist($systems, "list", "system");

$franchises = getunique('franchise', 'default');
$franchisesdd = buildlist($franchises, "dd", "franchise");
$franchiseslist = buildlist($franchises, "list", "franchise");

$genres = getunique('genre', 'default');
$genresdd = buildlist($genres, "dd", "genre");
$genreslist = buildlist($genres, "list", "genre");

$statuss = getunique('status', 'default');
$statussdd = buildlist($statuss, "dd", "status");





?>


		<h1>1up Guide!</h1>

		<a href="/"><img src="images/NSMBWii1upMushroom.png" height=100></a>

		<h2>Lists!</h2>
		<ul>
			<li><a href="#">Top Games Of All Time</a></li>

			<li><a href="#">Recent Games (Last 60 Days)</a></li>
			<li><a href="#">Upcoming Games</a></li>

			<li><a href="#">unexpected sequels on wii</a></li>
			<li><a href="#">dc not released in usa</a></li>
			<li><a href="#">sega arcade never ported</a></li>
			<li><a href="#">2d games on ps2</a></li>
			<li><a href="#">metroidvania games</a></li>
			<li><a href="#">only playable on ps2</a></li>
			<li><a href="#">artistic games</a></li>


			<li>
				<h3>System Essentials</h3>
				<ul>
					<li><a href="#">Super NES</a></li>
					<li><a href="#">Nintendo 64</a></li>
					<li><a href="#">Gamecube</a></li>
					<li><a href="#">Wii</a></li>

				</ul>
			</li>
			<li>
				<h3>Genre Essentials</h3>
				<ul>
					<li><a href="#">Platformer</a></li>
					<li><a href="#">Kart Racing</a></li>

				</ul>
			</li>
			<li>
				<h3>Franchise Essentials</h3>
				<ul>
					<li><a href="#">Mario</a></li>
					<li><a href="#">Sonic</a></li>
					<li><a href="#">Mario Kart</a></li>
					<li><a href="#">Kirby</a></li>
					<li><a href="#">Yoshi</a></li>
					<li><a href="#">Zelda</a></li>
					<li><a href="#">Mortal Kombat</a></li>
					<li><a href="#">Castlevania</a></li>
					<li><a href="#">Mega Man</a></li>
					<li><a href="#">Crash</a></li>
					<li><a href="#">Spyro</a></li>
					<li><a href="#">Ape Escape</a></li>
					<li><a href="#">Rayman</a></li>
					<li><a href="#">Oddworld</a></li>
					<li><a href="#">Donkey Kong</a></li>
					<li><a href="#">Metroid</a></li>
					<li><a href="#">Contra</a></li>
					<li><a href="#">Killer Instinct</a></li>
					<li><a href="#">Strider</a></li>
					<li><a href="#">Toejam & Earl</a></li>
					<li><a href="#">Klonoa</a></li>
					<li><a href="#">TMNT</a></li>
					<li><a href="#">Batman</a></li>
					<li><a href="#">WWF/WWE/WCW</a></li>
					<li><a href="#">Taz</a></li>
				</ul>
			</li>
		</ul>

		<h2>Filters</h2>
		<form method="get">

		<select name="developer" id="developer">
			<option value="">--- developer --</option>
			<?php echo $developersdd; ?>
		</select>

		<select name="publisher" id="publisher">
			<option value="">--- publisher --</option>
			<?php echo $publishersdd; ?>
		</select>

		<select name="year" id="year">
			<option value="">--- year --</option>
			<?php
				for($i=2014;$i>1975;$i--){
					echo "<option value=\"".$i."\">".$i."</option>
					";
				}


			?>
		</select>

		<select name="system" id="system">
			<option value="">--- system --</option>
			<?php echo $systemsdd; ?>
		</select>


		<select name="franchise" id="franchise">
			<option value="">--- franchise --</option>
			<?php echo $franchisesdd; ?>
		</select>

		<select name="genre" id="genre">
			<option value="">--- genre --</option>
			<?php echo $genresdd; ?>
		</select>

		<select name="status" id="status">
			<option value="">--- status --</option>
			<?php echo $statussdd; ?>
		</select>

		<input type="submit" value="Filter" id="filterbtn" name="filterbtn">

		</form>

