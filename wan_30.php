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
		echo(" ");	
	}
	
	for($col=0;$col<=5-$row;$col++){
		echo("*");
	}

	for($col=0;$col<=4-$row;$col++){
		echo("*");
	}

	for($col=$row;$col>=1;$col--) {
		echo($col);
	}

	echo "<br/>";
}
?>

<a href=nai_31.php>nai31</a>