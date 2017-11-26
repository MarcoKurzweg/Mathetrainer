<?php echo "<!DOCTYPE html>\n"; ?>

<html>
	<head>
		<title>Aufgaben</title>
		<meta charset="UTF-8" />
	</head>
	
	
	<body style="background-color: #E6AF5D">
		<header>
			<h1>Übungsaufgaben zur Addition mit Brüchen</h1>
		</header>
	</body>	
		
	<main>
		
		<div style="border: 1px solid black;">
		
		<!-- ------------------------- -->
		
		<div style="border: 1px solid black;">
		<table border="1" width="100%">
		
		<!-- Tabellenbeschriftung -->
		<tr style="background-color: #E0E0E0"><td>Aufgaben 1:</td><td>Ergebnis:<td>Aufgaben 4:</td><td>Ergebnis:</td></tr>
		
		<!-- Erste Reihe Aufgaben -->
		<tr valign="top" style="background-color: #E0E0E0"><td>
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>3</div></u></td><td rowspan='2'>&#160+&#160 </td><td><u>
		<div align='center'>2</div></u></td>
		</tr><tr><td>
		<div align='center'>7</div></td><td>
		<div align='center'>3</div></td></tr></table>
		</td>
		<td><li><a href="loesadd1.php">Lösung</a></li></td>
		<td>
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>1</div></u></td><td rowspan='2'>&#160+&#160 </td><td><u>
		<div align='center'>1</div></u></td>
		</tr><tr><td>
		<div align='center'>3</div></td><td>
		<div align='center'>6</div></td></tr></table>
		</td>
		<td><li><a href="loesadd4.php">Lösung</a></li></td></tr>
		
		<!-- Zweite Reihe Anweisung-->
		<tr style="background-color: #E0E0E0"><td>Aufgabe 2:</td><td>Ergebnis:<td>Aufgabe 5:</td><td>Ergebnis:</td></tr>
		
		<!-- Zweite Reihe Aufgaben-->
		<tr valign="top" style="background-color: #E0E0E0"><td>
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>2</div></u></td><td rowspan='2'>&#160+&#160 </td><td><u>
		<div align='center'>3</div></u></td>
		</tr><tr><td>
		<div align='center'>4</div></td><td>
		<div align='center'>8</div></td></tr></table>
		</td>
		<td><li><a href="loesadd2.php">Lösung</a></li></td>
		<td>
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>1</div></u></td><td rowspan='2'>&#160+&#160 </td><td><u>
		<div align='center'>1</div></u></td>
		</tr><tr><td>
		<div align='center'>3</div></td><td>
		<div align='center'>4</div></td></tr></table>
		</td>
		<td><li><a href="loesadd5.php">Lösung</a></li></td></tr>
		
		<tr style="background-color: #E0E0E0"><td>Aufgabe 3:</td><td>Ergebnis:<td>Aufgabe 6:</td><td>Ergebnis:</td></tr>
		
		
		<tr valign="top" style="background-color: #E0E0E0"><td>
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>1</div></u></td><td rowspan='2'>&#160+&#160 </td><td><u>
		<div align='center'>3</div></u></td>
		</tr><tr><td>
		<div align='center'>7</div></td><td>
		<div align='center'>5</div></td></tr></table>
		</td>
		<td><li><a href="loesadd3.php">Lösung</a></li></td>
		<td>
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>7</div></u></td><td rowspan='2'>&#160+&#160 </td><td><u>
		<div align='center'>3</div></u></td>
		</tr><tr><td>
		<div align='center'>21</div></td><td>
		<div align='center'>5</div></td></tr></table>
		</td>
		<td><li><a href="loesadd6.php">Lösung</a></li></td></tr>
		
		</table>
		</div>
		
		
		
		
		
		
		<!-- ---------------------------- -->
		
	</main>
	
	
	<footer>
	
	<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>

	<table>
	<tr><td><form action=addition.php method=post>
			<input type=submit value=Zurück />
		</form></td><td>
					
	<form action=index.php method=post>
			<input type=submit value=Main />
		</form></td></tr>
		</table>
	</footer>
	
</html>