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
for($row=0;$row<=4;$row++) {

	echo($row+1);

	echo("*");

	for($col=1;$col<=1;$col++){
		echo($col+$row+$row);
	}

	echo("*");

	for($col=2;$col<=2;$col++){
		echo($col+$row+$row);
	}
	echo "<br/>";
}
?>

<a href=index.html>Home</a>