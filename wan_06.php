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
for($row=1;$row<=7;$row++) {
	for($col=2;$col<=1+$row;$col++) {
	echo(" ");
	}
	for($col=1;$col<=1;$col++){
		echo($col);
	}
	for($col=$row;$col<=6;$col++){
		echo("01");
	}
	echo "<br/>";
}
?>


<a href=nai_07.php>nai07</a>