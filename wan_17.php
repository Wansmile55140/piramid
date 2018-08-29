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
	for($col=$row;$col<=$row;$col++) {
		echo($col);
		echo(10-$row);

		echo($col);
		echo(10-$row);

		echo($col);
		echo(10-$row);

		echo($col);
		echo(10-$row);
	}

	echo "<br/>";
}
?>

<a href=nai_18.php>nai18</a>