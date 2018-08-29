<head>wilaiwan</head>
<body>
<style>
@font-face{
font-family:mono;
src:url('mono.ttf');
}
</style>
<pre style="font-family:mono;font-size:20px;">

<?php
for($row=1;$row<=5;$row++) {
	echo($row);

	for($col=1;$col<=7-$row;$col++) {
		echo("*");	
	}
	
	for($col=2;$col<=$row;$col++) {
		echo(" ");	
	}

	echo($row);

	echo "<br/>";
}
?>

<a href=nai_24.php>nai24</a>