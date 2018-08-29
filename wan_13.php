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
	for($col=2;$col<=$row;$col++) {
	echo("  ");
	}
	for($col=11;$col>=11;$col--){
		echo($col-$row-$row);
	}
	for($col=10;$col>=6+$row;$col--){
		echo($col-$row-$row);
	}

	for($col=5;$col>=1+$row;$col--){
		echo($col-$row);
	}



	echo "<br/>";
}
?>

<a href=nai_14.php>nai14</a>