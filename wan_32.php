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
	for($col=1;$col<=8-$row;$col++) {
		echo($col);	
	}

	for($col=1;$col<=2+$row;$col++) {
		echo("*");	
	}
	
	echo($row+2);

	echo "<br/>";
}
?>

<a href=nai_33.php>nai33</a>