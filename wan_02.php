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
	for($col=$row;$col<=$row+2;$col++) {
		echo($col);
	}
	
	for($col=0;$col<=1+$row;$col++){
		echo("*");	
	}
	
	echo "<br/>";
}
?>

<br><br><a href=nai_03.php>nai03</a>
