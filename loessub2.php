<?php echo "<!DOCTYPE html>\n"; ?>

<html>
	<head>
		<title>Aufgaben</title>
		<meta charset="UTF-8" />
	</head>
	
	
	<body style="background-color: #71A2EB">
		<header>
			<h1>Lösung Aufgabe 2</h1>
		</header>
	</body>	
		
	<main>
	
	<tr valign="top"><td>
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>11</div></u></td><td rowspan='2'>&#160-&#160 </td><td><u>
		<div align='center'>3</div></u></td>
		</tr><tr><td>
		<div align='center'>12</div></td><td>
		<div align='center'>4</div></td></tr></table>
		</td>
		
		<article><?php echo '<br />' ."\n"."<br />"."\n".""; ?></article>
		<article><?php echo '<br />' ."\n"."<br />"."\n".""; ?></article>
		<article><?php echo "Kleinster gemeinsamer Nenner ist: <strong>12</strong><br />" . "\n"; ?></article>
		<article><?php echo "Daraus folgt:<br />" . "\n"; ?></article>
		<article><?php echo '<br />' ."\n"."<br />"."\n".""; ?></article>
		
		<tr valign="top"><td>
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>11</div></u></td><td rowspan='2'>&#160-&#160 </td><td><u>
		<div align='center'>9</div></u></td>
		</tr><tr><td>
		<div align='center'><strong>12</strong></div></td><td>
		<div align='center'><strong>12</strong></div></td></tr></table>
		</td>
	
		<article><?php echo '<br />' ."\n"."<br />"."\n".""; ?></article>
		<article><?php echo '<br />' ."\n"."<br />"."\n".""; ?></article>
		<article><?php echo "Nun die Zähler subtrahieren und Nenner übertragen, dann ergibt sich:<br />" . "\n"; ?></article>
		<article><?php echo '<br />' ."\n"."<br />"."\n".""; ?></article>
		
		<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center' style="color:red">2</div></u></td>
		<tr><td><div align='center' style="color:green">12</div></td></table>
		
		
				<article><?php echo '<br />' ."\n"."<br />"."\n".""; ?></article>
		<article><?php echo '<br />' ."\n"."<br />"."\n".""; ?></article>
		<article><?php echo "An dieser Stelle kann noch einmal gekürzt werden und man erhält:<br />" . "\n"; ?></article>
		<article><?php echo '<br />' ."\n"."<br />"."\n".""; ?></article>
		
				<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center' style="color:red">1</div></u></td>
		<tr><td><div align='center' style="color:green">6</div></td></table>
		
		<article><?php echo '<br />' ."\n"."<br />"."\n".""; ?></article>
		<article><?php echo '<br />' ."\n"."<br />"."\n".""; ?></article>
		<article><?php echo "Also im Ganzen dann:<br />" . "\n"; ?></article>
		<article><?php echo '<br />' ."\n"."<br />"."\n".""; ?></article>
		
				<table border='0' cellspacing='0' cellpadding='0' align='left' class='tafel'>
		<tr><td><u><div align='center'>11</div></u></td><td rowspan='2'>&#160-&#160 </td><td><u>
		<div align='center'>3</div></u></td><td rowspan='2'>&#160=&#160 </td><td><u>
		<div align='center'>11</div></u></td><td rowspan='2'>&#160-&#160 </td><td><u>
		<div align='center'>9</div></u></td><td rowspan='2'>&#160=&#160 </td><td><u>
		<div align='center' style="color:red">2</div></u></td><td rowspan='2'>&#160=&#160 </td><td><u>
		<div align='center' style="color:red">1</div></u></td></tr><tr><td>
		<div align='center'>12</div></td><td>
		<div align='center'>4</div></td><td>
		<div align='center'>12</div></td><td>
		<div align='center'>12</div></td><td>
		<div align='center' style="color:green">12</div></td><td>
		<div align='center' style="color:green">6</div></td>
		
		</tr></table>
		
		</main>
		
		
		
				
		<article><?php echo '<br />' ."\n"."<br />"."\n".""; ?></article>
		<article><?php echo '<br />' ."\n"."<br />"."\n".""; ?></article>
			
	<footer>
	
	<article>
			<?php echo '<br />' ."\n"."<br />"."\n".""; ?>

	<table>
	<tr><td><form action=aufgabensubtraktion.php method=post>
			<input type=submit value=Zurück />
		</form></td><td>

		</table>
	</footer>
		</html>