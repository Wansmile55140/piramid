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
	for($col=2;$col<=0+$row;$col++) {
		echo(" ");
	}
	
	for($col=$row;$col<=$row+1;$col++) {
		echo($row);
	}
	
	for($col=1;$col<=4-$row;$col++){
		echo("**");
	}
	
	for($col=$row;$col<=$row+1;$col++) {
		echo($row);
	}
	
	echo "<br/>";
}
?>

<br><br><a href=nai_02.php>nai02</a>

