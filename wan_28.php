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
	for($col=5;$col>=$row;$col--) {
		echo($col);
	}
	
	for($col=1;$col<=$row;$col++) {
		echo("*");
	}
	
	for($col=2;$col<=$row;$col++) {
		echo("*");
	}

	for($col=$row;$col<=5;$col++) {
		echo($col);
	}

	echo "<br/>";
}
?>

<a href=nai_29.php>nai29</a>