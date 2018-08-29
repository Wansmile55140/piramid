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

	echo("*");

	echo(2+$row);

	for($col=1;$col<=2+$row;$col++) {
		echo("*");
	}

	echo "<br/>";
}
?>

<a href=nai_30.php>nai30</a>