<?php echo "<!DOCTYPE html>\n"; ?>

<html>
	<head>
		<title>Multiplikation</title>
		<meta charset="UTF-8" />
	</head>
	
	
	<body style="background-color: #E6AF5D">
		<header>
			<h1>Multiplikation von Brüchen</h1>
		</header>
	</body>	
		
	<main>
		
		
		<article><?php echo 'Bei der Multiplikation von Brüchen muss man folgendes beachten:<br />' ."\n"."Es werden sowohl die <strong>Zähler aller</strong> Brüche, als auch die <strong>Nenner aller</strong> Brüche
		miteinander multipliziert.<br />"."\n"."Damit die Zahlen nicht zu groß werden, sollte man schauen, dass man vorher möglichst weit kürzt.<br />"."\n"; ?></article>
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo '<strong>Beispiel:</strong><br />' ."\n"."<br />"."\n".""; ?>
			</article>
		
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>12</div></u></td><td rowspan='2'>&#160x&#160 </td><td><u>
		<div align='center'>28</div></u></td>
		</tr><tr><td>
		<div align='center'>15</div></td><td>
		<div align='center'>35</div></td></tr></table>
		
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo 'Erstmal schauen ob man die Brüche kürzen kann.<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo 'Der erste Bruch lässt sich kürzen und sieht dann wie folgt aus:<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			
				<table border='0' cellspacing='0' cellpadding='0' align='center' class='tafel'>
		<tr><td><u><div align='center' style="color:red">4</div></u></td>
		<tr><td><div align='center' style="color:green">5</div></td></table>
		
		<article>
			<?php echo 'Der zweite Bruch lässt sich auch kürzen und sieht wie folgt aus:<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
					<table border='0' cellspacing='0' cellpadding='0' align='center' class='tafel'>
		<tr><td><u><div align='center' style="color:red">4</div></u></td>
		<tr><td><div align='center' style="color:green">5</div></td></table>
		
		<article>
			<?php echo 'Nun hat man also nach dem Kürzen die Aufgabe stehen:<br />' ."\n"."<br />"."\n".""; ?>
			</article>
		
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>4</div></u></td><td rowspan='2'>&#160x&#160 </td><td><u>
		<div align='center'>4</div></u></td>
		</tr><tr><td>
		<div align='center'>5</div></td><td>
		<div align='center'>5</div></td></tr></table>
		
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
		
		<article>
			<?php echo 'Nun muss man nur noch die Zähler miteinander multiplizieren und die Nenner miteinander multiplizieren und kommt dann zu dem Ergebnis:<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
				<table border='0' cellspacing='0' cellpadding='0' align='center' class='tafel'>
		<tr><td><u><div align='center' style="color:red">16</div></u></td>
		<tr><td><div align='center' style="color:green">25</div></td></table>
		
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<article>
			<?php echo 'Im ganzen sieht die Gleichung dann wie folgt aus:<br />' ."\n"."<br />"."\n".""; ?>
			</article>
			
			<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>12</div></u></td><td rowspan='2'>&#160x&#160 </td><td><u>
		<div align='center'>28</div></u></td><td rowspan='2'>&#160=&#160 </td><td><u>
		<div align='center'>4</div></u></td><td rowspan='2'>&#160x&#160 </td><td><u>
		<div align='center'>4</div></u></td><td rowspan='2'>&#160=&#160 </td><td><u>
		<div align='center'>16</div></u></td></tr><tr><td>
		<div align='center'>15</div></td><td>
		<div align='center'>35</div></td><td>
		<div align='center'>5</div></td><td>
		<div align='center'>5</div></td><td>
		<div align='center'>25</div></td></tr></table>
		
		<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
		
			<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>
			</article>
		<article>Über den folgenden Link gelangt man zu den <li><a href="aufgabenmultiplikation.php">Übungsaufgaben</a></li></article>
	
		
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