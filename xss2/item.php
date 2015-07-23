<!DOCTYPE html>
<?php
header('X-XSS-Protection: 0');
?>
<html lang="en">
<head>
	<?php include '../js/dependencies.php';?>
	<link rel="stylesheet" type="text/css" href="../css/stylesxss.css">
	<script src="../js/xsslevel2.js"></script>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-11">
				<?php
				echo "<input type='text' class='form-control'";
				if(isset($_GET['id'])){
					echo "value='http://shoppingworld.com/item?id=" . $_GET['id'] ."' id='url'>";
				}
				else{
					echo "value='http://shoppingworld.com/item' id='url'>";
				}
				?>
			</div>
			<div class="col-xs-1">
				<input type="button" value="Go" onclick="urlInterpret()">
			</div>
		</div>
		<div class="row">
			<br>
			<?php
			echo '<div class="col-md-4" style="text-align:center;">
			<h2>Cover</h2>';
			echo '	<img src="/img/'.$_GET['id'].'.jpg">';
			echo '</div>';
			$price = 0;
			$title = "";
			$description = "";
			if($_GET['id'] == 1){
				$title = "Game Of Thrones";
				$description = "Long ago, in a time forgotten, a preternatural event threw the seasons out of balance. In a land where summers can last decades and winters a lifetime, trouble is brewing. The cold is returning, and in the frozen wastes to the north of Winterfell, sinister forces are massing beyond the kingdom’s protective Wall. To the south, the king’s powers are failing—his most trusted adviser dead under mysterious circumstances and his enemies emerging from the shadows of the throne. At the center of the conflict lie the Starks of Winterfell, a family as harsh and unyielding as the frozen land they were born to. Now Lord Eddard Stark is reluctantly summoned to serve as the king’s new Hand, an appointment that threatens to sunder not only his family but the kingdom itself.<br><br>
				Sweeping from a harsh land of cold to a summertime kingdom of epicurean plenty, A Game of Thrones tells a tale of lords and ladies, soldiers and sorcerers, assassins and bastards, who come together in a time of grim omens. Here an enigmatic band of warriors bear swords of no human metal; a tribe of fierce wildlings carry men off into madness; a cruel young dragon prince barters his sister to win back his throne; a child is lost in the twilight between life and death; and a determined woman undertakes a treacherous journey to protect all she holds dear. Amid plots and counter-plots, tragedy and betrayal, victory and terror, allies and enemies, the fate of the Starks hangs perilously in the balance, as each side endeavors to win that deadliest of conflicts: the game of thrones.<br><br>
				Unparalleled in scope and execution, A Game of Thrones is one of those rare reading experiences that catch you up from the opening pages, won’t let you go until the end, and leave you yearning for more.";
				$price = 9.99;
			}
			elseif ($_GET['id'] == 2) {
				$title = "Fellowship Of The Ring";
				$description = "The first volume in J.R.R. Tolkien's epic adventure THE LORD OF THE RINGS<br><br>
				One Ring to rule them all, One Ring to find them, One Ring to bring them all and in the darkness bind them<br><br>
				In ancient times the Rings of Power were crafted by the Elven-smiths, and Sauron, the Dark Lord, forged the One Ring, filling it with his own power so that he could rule all others. But the One Ring was taken from him, and though he sought it throughout Middle-earth, it remained lost to him. After many ages it fell into the hands of Bilbo Baggins, as told in The Hobbit. In a sleepy village in the Shire, young Frodo Baggins finds himself faced with an immense task, as his elderly cousin Bilbo entrusts the Ring to his care. Frodo must leave his home and make a perilous journey across Middle-earth to the Cracks of Doom, there to destroy the Ring and foil the Dark Lord in his evil purpose.<br><br>
				“A unique, wholly realized other world, evoked from deep in the well of Time, massively detailed, absorbingly entertaining, profound in meaning.” – New York Times";
				$price = 8.62;
			}
			elseif ($_GET['id'] == 3) {
				$title = "Twenty Thousand Leagues Under The Sea";
				$description = "Twenty Thousand Leagues Under the Sea is a classic science fiction novel by French writer Jules Verne published in 1870. It tells the story of Captain Nemo and his submarine Nautilus, as seen from the perspective of Professor Pierre Aronnax after he, his servant Conseil, and Canadian whaler Ned Land wash up on their ship. On the Nautilus, the three embark on a journey which has them going all around the world, under the sea.";
				$price = 24000.00;
			}
			echo '<div class="col-md-4" style="text-align:center;">
			<h2>Description</h2>';
			echo $description .'</div>';
			echo '<div class="col-md-4" style="text-align:center;">';
			echo '<h2>Buy</h2>
			Buy '.$title.' for $'.$price.'<br>
			Quantity
			<select id="qty">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			</select>&nbsp;&nbsp;';
			echo '<input type="hidden" id="id" value="'.$_GET['id'].'">
			<button type="button" onclick="buy();">Buy</button><br>
			Item #'. $_GET['id'] .'
			<input type="hidden" id="name" value="'.$title.'">
			<input type="hidden" id="price" value="'.$price.'">';
			echo '</div>';
			?>
		</div>
	</div>
</body>
</html>