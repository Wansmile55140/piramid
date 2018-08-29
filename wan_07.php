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
	for($col=0;$col<=7-$row;$col++) {
	echo(" ");
	}
	for($col=1;$col<=1;$col++){
		echo($col);
	}
	for($col=3;$col<=1+$row;$col++){
		echo($col-1);
	}

		echo($row);

	for($col=$row;$col>=1;$col--){
		echo($col);
	}

	echo "<br/>";
}
?>


<a href=nai_08.php>nai08</a>