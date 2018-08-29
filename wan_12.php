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
	for($col=$row;$col<=10-$row;$col++){
		echo($col);
	}
	echo "<br/>";
}
?>

<a href=nai_13.php>nai13</a>