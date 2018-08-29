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
	for($col=1;$col<=5-$row;$col++) {
	echo(" ");
	}
	for($col=1;$col<=$row;$col++){
		echo($col);
	}
	for($col=$row;$col<=$row;$col++){
		echo(6-$row);
	}
	for($col=$row;$col>=1;$col--){
		echo($col);
	}
	echo "<br/>";
}
?>

<a href=nai_11.php>nai11</a>