<?php echo "<!DOCTYPE html>\n"; ?>

<html>
	<head>
		<title>Division</title>
		<meta charset="UTF-8" />
	</head>
	
	
	<body style="background-color: #E6AF5D">
		<header>
			<h1>Division von Brüchen</h1>
		</header>
	</body>	
		
	<main>
		
		
		<article><?php echo 'Bei der Division von Brüchen muss man folgendes beachten:<br />' ."\n"."Wenn man einen Bruch durch einen anderen Bruch teilt, ist es das gleiche, wenn man den ersten Bruch mit dem 
		<strong>Kehrwert</strong> des zweiten Bruches multipliziert.
		.<br />"."\n"."Danach folgt das gleiche Verfahren, wie bei der Multiplikation von Brüchen.<br />"."\n"; ?></article>
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo '<strong>Beispiel:</strong><br />' ."\n"."<br />"."\n".""; ?>
			</article>
		
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center' style="color:red">2</div></u></td><td rowspan='2'>&#160:&#160 </td><td><u>
		<div align='center' style="color:red">1</div></u></td>
		</tr><tr><td>
		<div align='center' style="color:green">3</div></td><td>
		<div align='center' style="color:green">2</div></td></tr></table>
		
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo 'Erstmal den Kehrwert des zweiten Bruches bilden.<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo 'Der zweite Bruch sieht dann wie folgt aus:<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			
				<table border='0' cellspacing='0' cellpadding='0' align='center' class='tafel'>
		<tr><td><u><div align='center' style="color:green">2</div></u></td>
		<tr><td><div align='center' style="color:red">1</div></td></table>
		
		
		
		<article>
			<?php echo 'Nun kann man den ersten Bruch mit dem Kehrwert des zweiten Bruches multiplizieren:<br />' ."\n"."<br />"."\n".""; ?>
			</article>
		
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center' style="color:red">2</div></u></td><td rowspan='2'>&#160x&#160 </td><td><u>
		<div align='center' style="color:green">2</div></u></td>
		</tr><tr><td>
		<div align='center' style="color:green">3</div></td><td>
		<div align='center' style="color:red">1</div></td></tr></table>
		
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
		
		<article>
			<?php echo 'Das Ergebnis daraus ist:<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
				<table border='0' cellspacing='0' cellpadding='0' align='center' class='tafel'>
		<tr><td><u><div align='center' style="color:red">4</div></u></td>
		<tr><td><div align='center' style="color:green">3</div></td></table>
		
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo 'Im ganzen sieht die Gleichung dann wie folgt aus:<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>2</div></u></td><td rowspan='2'>&#160:&#160 </td><td><u>
		<div align='center'>1</div></u></td><td rowspan='2'>&#160=&#160 </td><td><u>
		<div align='center'>2</div></u></td><td rowspan='2'>&#160x&#160 </td><td><u>
		<div align='center'>2</div></u></td><td rowspan='2'>&#160=&#160 </td><td><u>
		<div align='center'>4</div></u></td></tr><tr><td>
		<div align='center'>3</div></td><td>
		<div align='center'>2</div></td><td>
		<div align='center'>3</div></td><td>
		<div align='center'>1</div></td><td>
		<div align='center'>3</div></td></tr></table>
		
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
		
			<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
		<article>Über den folgenden Link gelangt man zu den <li><a href="aufgabendivision.php">Übungsaufgaben</a></li></article>
	
		
	</main>
	
	
	<footer>
	
	<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>

	<table>
	<tr><td><form action=bruch.php method=post>
			<input type=submit value=Zurück />
		</form></td><td>
					
	<form action=index.php method=post>
			<input type=submit value=Main />
		</form></td></tr>
		</table>
	</footer>
	
</html>