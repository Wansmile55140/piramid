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
for($row=1;$row<=4;$row++) {
	for($col=$row;$col<=$row;$col++) {
		echo($col);
	}
	for($col=$row;$col<=$row;$col++) {
		echo($col+4);
	}
	
	for($col=0;$col<=3+$row;$col++) {
		echo("*");	
	}
	
	echo "<br/>";
}
?>

<a href=nai_04.php>nai04</a>
