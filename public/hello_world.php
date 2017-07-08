<!DOCTYPE html>
<html>
<head>
	<title>HTML/PHP</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
		/*
			echo and print are more or less the same. 
			They are both used to output data to the screen.
			The differences are small: echo has no return 
			value while print has a return value of 1 so it 
			can be used in expressions. echo can take multiple 
			parameters (although such usage is rare) while print 
			can take one argument. echo is marginally faster 
			than print.
		*/
		echo 'Hello World!'; 
		print "<h2>Hello World</h2>";
	?>
</body>
</html>
