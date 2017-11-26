<?php echo "<!DOCTYPE html>\n"; ?>

<html>
	<head>
		<title>Kürzen und Erweitern</title>
		<meta charset="UTF-8" />
	</head>
	
	
	<body style="background-color: #E6AF5D">
		<header>
			<h1>Kürzen und Erweitern</h1>
		</header>
	</body>	
		
	<main>
		
		<main>
		
		<div style="border: 1px solid black;">
		<article style="background-color: #E0E0E0"><?php echo 'Was bedeutet "<strong>Brüche kürzen</strong>"?<br />' ."\n"."<br />"."\n"."Einen Bruch kürzen, bedeutet, den Zähler und den Nenner des Bruches beide durch die gleiche Zahl zu teilen.<br />" ."\n".
		"Dadurch wird der Bruch übersichtlicher.<br />"."\n"."<br />"."\n".'Was bedeutet "<strong>Brüche erweitern</strong>"?<br />'."\n"."Einen Bruch erweitern, bedeutet, den Zähler und den Nenner des Bruches beide mit der gleichen Zahl zu multiplizieren.<br />" ."\n"."<br />"."\n".
		"Das <strong>Kürzen und Erweitern</strong> benötigt man zum Beispiel dafür,
		um Brüche addieren zu können, oder auch um einen Bruch von einem anderen zu subtrahieren.<br />"."\n"; ?></article>
		<article style="background-color: #E0E0E0">
			<?php echo '<br />' ."\n"."<br />"."\n"; ?>
			</article> 
		</div>
		<h2>Beispiele:</h2>
		<h3>Kürzen</h3>

		<article >Im folgenden Beispiel wird der Bruch so weit gekürzt wie es geht. Das bedeutet bis <strong style="color:red">Zähler</strong> und <strong style="color:green">Nenner </strong>
		teilerfremd sind:
		<article><?php echo '<br />' ."\n"; ?></article>
		</article>
		<table border='0' cellspacing='0' cellpadding='0' align='center' class='tafel' >
		<tr><td><u>
		<div align='center' style="color:red"><font size=4>12</font></div></u></td>
		
		<tr><td>
		<div align='center' style="color:green"><font size=4>36</font></div></td></table>
		
		<article >Der größte gemeinsame Teiler des <strong style="color:red">Zählers </strong>und des <strong style="color:green">Nenners </strong>ist <strong>12.</strong></article>
		<article><?php echo '<br />' ."\n"; ?></article>
		<article><div >Daher werden Zähler und Nenner durch 12 geteilt. Und es ergibt folgendes Ergebnis:</div></article>
		
		<table border='0' cellspacing='0' cellpadding='0' align='center' class='tafel' >
		<tr><td><u>
		<div align='center' style="color:red"><font size=4>1</font></div></u></td>
		
		<tr><td>
		<div align='center' style="color:green"><font size=4>3</font></div></td></table>
		
		
		<article>
			<?php echo '<br />' ."\n".'<br />'."\n"; ?>
			</article>
		
		<h3>Erweitern</h3>
		
		<article >Im folgenden Beispiel wird der Bruch um eine Zahl erweitert:</article>
		<article><?php echo '<br />' ."\n"; ?></article><font size=4>
		<table border='0' cellspacing='0' cellpadding='0' align='center' class='tafel' >
		<tr><td><u><div align='center' style="color:red">3</div></u></td>
		<tr><td><div align='center' style="color:green">5</div></td></table></font>
		<article >Der dargestellte Bruch soll mit <strong> 4 </strong> erweitert werden.</article>
		<article >Dafür werden jetzt sowohl der <strong style="color:red"> Zähler </strong>als auch der <strong style="color:green">Nenner </strong>mit 4 multipliziert. Dadurch erhält man folgendes Ergebnis:</article>
		<article><?php echo '<br />' ."\n"; ?></article>
		<table border='0' cellspacing='0' cellpadding='0' align='center' class='tafel'>
		<tr><td><u><div align='center' style="color:red">12</div></u></td>
		<tr><td><div align='center' style="color:green">20</div></td></table>
		
		<article>
			<?php echo '<br />' ."\n".'<br />'."\n"; ?>
			</article>
		<article>Über den folgenden Link gelangt man zu den <li><a href="aufgabenkuerzen.php">Übungsaufgaben</a></li></article>
	

	</main>
	
		<footer>
	
	<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>

	<table>
	
					
	<form action=index.php method=post>
			<input type=submit value=Main />
		</form>
		</table>
	</footer>
	
	
</html>