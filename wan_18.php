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
	for($col=$row;$col<=$row;$col++) {
		echo($col);	
	}

	for($col=1;$col<=$row;$col++) {
		echo("*");
	}

	echo($col-1);

	for($col=1;$col<=6-$row;$col++) {
		echo("*");
	}

	echo($col+3);

	echo "<br/>";
}
?>

<a href=nai_19.php>nai19</a>