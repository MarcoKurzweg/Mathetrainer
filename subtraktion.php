<?php echo "<!DOCTYPE html>\n"; ?>

<html>
	<head>
		<title>Subtraktion</title>
		<meta charset="UTF-8" />
	</head>
	
	
	<body style="background-color: #E6AF5D">
		<header>
			<h1>Subtraktion von Brüchen</h1>
		</header>
	</body>	
		
	<main>
		
		
		<article><?php echo 'Bei der Subtraktion von Brüchen muss man folgendes beachten:<br />' ."\n"."Zunächst einmal müssen <strong>alle</strong> Brüche auf den <strong>gleichen</strong> Nenner 
		gebracht werden.<br />"."\n"."Danach werden die Zähler voneinander subtrahiert und der gemeinsame Nenner wird übertragen.<br />"."\n"; ?></article>
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo '<strong>Beispiel:</strong><br />' ."\n"."<br />"."\n".""; ?>
			</article>
		
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>1</div></u></td><td rowspan='2'>&#160-&#160 </td><td><u>
		<div align='center'>1</div></u></td>
		</tr><tr><td>
		<div align='center'>2</div></td><td>
		<div align='center'>4</div></td></tr></table>
		
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo 'Erstmal bringt man die Brüche auf den gemeinsamen Nenner.<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo 'Da 4 ein vielfaches von 2 ist, ist 4 der kleinste gemeinsame Nenner.<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo 'Der erste Bruch muss also mit 2 erweitert werden, was bedeutet, auch der Zähler muss mit 3 multipliziert werden.<br />' ."\n"."<br />"."\n".""; ?>
			</article>
				<table border='0' cellspacing='0' cellpadding='0' align='center' class='tafel'>
		<tr><td><u><div align='center' style="color:red">2</div></u></td>
		<tr><td><div align='center' style="color:green">4</div></td></table>
		
		<article>
			<?php echo 'Der zweite Bruch kann so übernommen werden, wie er ist.<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
					<table border='0' cellspacing='0' cellpadding='0' align='center' class='tafel'>
		<tr><td><u><div align='center' style="color:red">1</div></u></td>
		<tr><td><div align='center' style="color:green">4</div></td></table>
		
		<article>
			<?php echo 'Nun hat man also nach dem Erweitern die Aufgabe stehen:<br />' ."\n"."<br />"."\n".""; ?>
			</article>
		
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>2</div></u></td><td rowspan='2'>&#160-&#160 </td><td><u>
		<div align='center'>1</div></u></td>
		</tr><tr><td>
		<div align='center'>4</div></td><td>
		<div align='center'>4</div></td></tr></table>
		
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
		
		<article>
			<?php echo 'Nun muss man nur noch die Zähler subtrahieren und den Nenner übernehmen und kommt dann zu dem Ergebnis:<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
				<table border='0' cellspacing='0' cellpadding='0' align='center' class='tafel'>
		<tr><td><u><div align='center' style="color:red">1</div></u></td>
		<tr><td><div align='center' style="color:green">4</div></td></table>
		
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo 'Im ganzen sieht die Gleichung dann wie folgt aus:<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>1</div></u></td><td rowspan='2'>&#160-&#160 </td><td><u>
		<div align='center'>1</div></u></td><td rowspan='2'>&#160=&#160 </td><td><u>
		<div align='center'>2</div></u></td><td rowspan='2'>&#160-&#160 </td><td><u>
		<div align='center'>1</div></u></td><td rowspan='2'>&#160=&#160 </td><td><u>
		<div align='center' style="color:red">1</div></u></td></tr><tr><td>
		<div align='center'>2</div></td><td>
		<div align='center'>4</div></td><td>
		<div align='center'>4</div></td><td>
		<div align='center'>4</div></td><td>
		<div align='center' style="color:green">4</div></td></tr></table>
		
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
		
			<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
		<article>Über den folgenden Link gelangt man zu den <li><a href="aufgabensubtraktion.php">Übungsaufgaben</a></li></article>
	
		
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