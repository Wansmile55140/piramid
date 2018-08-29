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
	
	for($col=$row;$col>=1;$col--){
		echo($col);
	}

	for($col=1;$col<=5-$row;$col++){
		echo("  ");
	}

	for($col=$row;$col>=1;$col--){
		echo("*");
	}

	echo "<br/>";
}
?>

<a href=nai_17.php>nai17</a>