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
	
	for($col=$row;$col<=9;$col++){
		echo("*");
	}

	for($col=2;$col<=$row;$col++){
		echo(" ");
	}
	
	for($col=$row;$col<=$row;$col++){
		echo(6-$row);
	}

	echo "<br/>";
}
?>

<a href=nai_20.php>nai20</a>