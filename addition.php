<?php echo "<!DOCTYPE html>\n"; ?>

<html>
	<head>
		<title>Addition</title>
		<meta charset="UTF-8" />
	</head>
	
	
	<body style="background-color: #E6AF5D">
		<header>
			<h1>Addition von Brüchen</h1>
		</header>
	</body>	
		
	<main>
		
		
		<article><?php echo 'Bei der Addition von Brüchen muss man folgendes beachten:<br />' ."\n"."Zunächst einmal müssen <strong>alle</strong> Brüche auf den <strong>gleichen</strong> Nenner 
		gebracht werden.<br />"."\n"."Danach werden die Zähler miteinander addiert und der gemeinsame Nenner wird übertragen.<br />"."\n"; ?></article>
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo '<strong>Beispiel:</strong><br />' ."\n"."<br />"."\n".""; ?>
			</article>
		
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>3</div></u></td><td rowspan='2'>&#160+&#160 </td><td><u>
		<div align='center'>7</div></u></td>
		</tr><tr><td>
		<div align='center'>5</div></td><td>
		<div align='center'>3</div></td></tr></table>
		
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo 'Erstmal bringt man die Brüche auf den gemeinsamen Nenner.<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo 'Da 3 und 5 keinen gemeinsamen Teiler haben ist das Produkt aus beiden der kleinste gemeinsame Nenner. Dementsprechend 3x5=15.<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo 'Der erste Bruch muss also mit 3 erweitert werden, was bedeutet, auch der Zähler muss mit 3 multipliziert werden.<br />' ."\n"."<br />"."\n".""; ?>
			</article>
				<table border='0' cellspacing='0' cellpadding='0' align='center' class='tafel'>
		<tr><td><u><div align='center' style="color:red">9</div></u></td>
		<tr><td><div align='center' style="color:green">15</div></td></table>
		
		<article>
			<?php echo 'Der zweite Bruch muss mit 5 erweitert werden, was bedeutet, auch der Zähler muss mit 5 multipliziert werden.<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
					<table border='0' cellspacing='0' cellpadding='0' align='center' class='tafel'>
		<tr><td><u><div align='center' style="color:red">35</div></u></td>
		<tr><td><div align='center' style="color:green">15</div></td></table>
		
		<article>
			<?php echo 'Nun hat man also nach dem Erweitern die Aufgabe stehen:<br />' ."\n"."<br />"."\n".""; ?>
			</article>
		
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>9</div></u></td><td rowspan='2'>&#160+&#160 </td><td><u>
		<div align='center'>35</div></u></td>
		</tr><tr><td>
		<div align='center'>15</div></td><td>
		<div align='center'>15</div></td></tr></table>
		
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
		
		<article>
			<?php echo 'Nun muss man nur noch die Zähler addieren und den Nenner übernehmen und kommt dann zu dem Ergebnis:<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
				<table border='0' cellspacing='0' cellpadding='0' align='center' class='tafel'>
		<tr><td><u><div align='center' style="color:red">44</div></u></td>
		<tr><td><div align='center' style="color:green">15</div></td></table>
		
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo 'Im ganzen sieht die Gleichung dann wie folgt aus:<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>3</div></u></td><td rowspan='2'>&#160+&#160 </td><td><u>
		<div align='center'>7</div></u></td><td rowspan='2'>&#160=&#160 </td><td><u>
		<div align='center'>9</div></u></td><td rowspan='2'>&#160+&#160 </td><td><u>
		<div align='center'>35</div></u></td><td rowspan='2'>&#160=&#160 </td><td><u>
		<div align='center'>44</div></u></td></tr><tr><td>
		<div align='center'>5</div></td><td>
		<div align='center'>3</div></td><td>
		<div align='center'>15</div></td><td>
		<div align='center'>15</div></td><td>
		<div align='center'>15</div></td></tr></table>
		
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
		
			<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
		<article>Über den folgenden Link gelangt man zu den <li><a href="aufgabenaddition.php">Übungsaufgaben</a></li></article>
	
		
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