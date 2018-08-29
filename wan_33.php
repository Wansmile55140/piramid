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
for($row=1;$row<=3;$row++) {
	for($col=1;$col<=3-$row;$col++) {
		
		echo(" ");
	}

	for($col=1;$col<=$row;$col++){
		echo("*");
	}

	for($col=2;$col<=$row;$col++){
		echo("*");
	}

	for($col=1;$col<=3-$row;$col++) {
		
		echo(" ");
	}

	echo "<br/>";
}

for($row=2;$row>=1;$row--) {
	for($col=1;$col<=3-$row;$col++) {
		echo(" ");
	}
	
	for($col=1;$col<=$row;$col++){
		echo("*");
	}
	
	for($col=2;$col<=$row;$col++){
		echo("*");
	}

	for($col=1;$col<=3-$row;$col++) {
		echo(" ");
	}

	echo "<br/>";
}

?>

<a href=nai_34.php>nai34</a>