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
	for($col=$row;$col<=7;$col++){
		echo("*");
	}
	
	echo($row);

	for($col=1;$col<=$row;$col++){
		echo("*");
	}

	for($col=$row;$col<=$row;$col++){
		echo(8-$row);
	}

	echo "<br/>";
}
?>

<a href=nai_22.php>nai22</a>