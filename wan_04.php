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
	for($col=1;$col<=$row;$col++) {
		echo("*");
	}
	
	for($col=$row;$col>=2;$col--){
		echo($col);
	}
	
	for($col=1;$col<=$row;$col++){
		echo($col);
	}
	
	echo "<br/>";
}
?>


<a href=nai_05.php>nai05</a>