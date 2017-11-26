<?php echo "<!DOCTYPE html>\n"; ?>

<html>
	<head>
		<title>Aufgaben</title>
		<meta charset="UTF-8" />
	</head>
	
	
	<body style="background-color: #E6AF5D">
		<header>
			<h1>Übungsaufgaben Kürzen und Erweitern</h1>
		</header>
	</body>	
		
	<main>
	<div style="border: 1px solid black;">
		<table border="1" width="100%">
		
		<!-- Tabellenbeschriftung -->
		<tr style="background-color: #E0E0E0"><td>Kürze so weit es geht:</td><td>Ergebnis vom Kürzen:</td><td>Dein Ergebnis:</td><td>Erweitere um <strong style="color:blue">3</strong>:</td><td>Ergebnis vom Erweitern:</td></tr>
		
		<!-- Erste Reihe Aufgaben -->
		<tr valign="top" style="background-color: #E0E0E0"><td>
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr style="background-color: #E0E0E0"><td><u><div align='center' style="color:red">3</div></u></td>
		<tr><td><div align='center' style="color:green">9</div></td></table>
		</td>
		<td><li><a href="loesung1.php">Lösung</a></li></td><td><table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr style="background-color: #E0E0E0">
		<form action= 'aufgabenkuerzen.php' method = "POST">
			<td>Zähler</td><td><u><div align='center' ><input type=int name='zaehler'></td><td>
		<input type=submit name="submit" value=Eingabe>	
    </div></u></td></tr>
		<tr><td>Nenner</td><td><div align='center' ><input  type=int name="nenner"></input></td>	</form>	<?php 
		
	
		
			if(isset($_POST['submit'])) {
			
	$zaehler = (int)$_POST['zaehler'] ;
	$nenner = (int)$_POST['nenner'];
	$wert = $zaehler / $nenner ;
	
	$richtig = 3 / 9 ;
	

	
	if($wert == $richtig){
		echo "Das ist richtig";
	}
	else
		echo "Das ist leider falsch";
			}
	
	?><td>
    </div></td></table>
			

		</form></td>
		<td>
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center' style="color:red">3</div></u></td>
		<tr><td><div align='center' style="color:green">5</div></td></table>
		</td>
		<td><li><a href="loesung4.php">Lösung</a></li></td></tr>
		
		<!-- Zweite Reihe Anweisung-->
		<tr style="background-color: #E0E0E0"><td>Kürze so weit es geht:</td><td>Ergebnis vom Kürzen:</td><td>Dein Ergebnis:</td><td>Erweitere um <strong style="color:blue">2</strong>:</td><td>Ergebnis vom Erweitern:</td></tr>
		
		<!-- Zweite Reihe Aufgaben-->
		<tr valign="top" style="background-color: #E0E0E0"><td>
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center' style="color:red">6</div></u></td>
		<tr><td><div align='center' style="color:green">18</div></td></table>
		</td>
		<td><li><a href="loesung2.php">Lösung</a></li></td><td></td>
		<td>
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center' style="color:red">1</div></u></td>
		<tr><td><div align='center' style="color:green">4</div></td></table>
		</td>
		<td><li><a href="loesung5.php">Lösung</a></li></td></tr>
		
		<tr style="background-color: #E0E0E0"><td>Kürze so weit es geht:</td><td>Ergebnis vom Kürzen:</td><td>Dein Ergebnis:</td><td>Erweitere um <strong style="color:blue">4</strong>:</td><td>Ergebnis vom Erweitern:</td></tr>
		
		
		<tr valign="top" style="background-color: #E0E0E0"><td>
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center' style="color:red">14</div></u></td>
		<tr><td><div align='center' style="color:green">35</div></td></table>
		</td>
		<td><li><a href="loesung3.php">Lösung</a></li></td><td></td>
		<td>
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center' style="color:red">6</div></u></td>
		<tr><td><div align='center' style="color:green">7</div></td></table>
		</td>
		<td><li><a href="loesung6.php">Lösung</a></li></td></tr>
		
		</table>
		</div>
		
		<article><?php echo '<br />' ."\n"."<br />"."\n".""; ?></article>
	
		
	</main>
	
	
	<footer>
	
	<article><?php echo '<br />' ."\n"."<br />"."\n".""; ?></article>
			

	<table>
	<tr><td><form action=kuerzen.php method=post>
			<input type=submit value=Zurück />
		</form></td><td>
					
	<form action=index.php method=post>
			<input type=submit value=Main />
		</form></td></tr>
		</table>
	</footer>

	

</html>