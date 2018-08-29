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

	for($col=0;$col<=5-$row;$col++) {
		echo($row);	
	}
	
	for($col=1;$col<=$row;$col++) {
		echo("*");	
	}

	echo "<br/>";
}
?>

<a href=nai_27.php>nai27</a>