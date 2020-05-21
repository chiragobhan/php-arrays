<!DOCTYPE html>
<html>

<head>
	<title>Temperature using PHP Array</title>
	<style type="text/css">
		div.left {
			float: left;
			margin-left: 25%;
		}

		div.right {
			float: right;
			margin-right: 25%;
		}
	</style>
</head>

<body>
	<?php
	//Initialization
	$array = array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78, 68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83);
	echo "<div class='left'>";
	echo '<pre>';
	echo "The recorded temperatures are as follows: <br>";
	print_r($array);
	echo '</pre>';
	echo '</div>';

	//Sorting the array in ascending to decending order
	for ($j = 0; $j < count($array); $j++) {
		for ($i = 0; $i < count($array) - 1; $i++) {
			if ($array[$i] > $array[$i + 1]) {
				$temp = $array[$i + 1];
				$array[$i + 1] = $array[$i];
				$array[$i] = $temp;
			}
		}
	}

	//Calculating and printing the average
	echo "<div class='right'>";
	echo '<br><b>Average of the temperature(s):</b><br>';
	$total = 0;
	foreach ($array as $key => $value) {
		$total = $total + $value;
	}
	echo ($total / count($array)) . ' is the average of the temperatures.<br>';

	//Calculating and printing five coolest
	echo '<br><b>Five warmest high temperatures are:</b><br>';
	$max = count($array);
	for ($i = $max - 5; $i < $max; $i++) {
		echo "$array[$i]&#8457; temperature<br>";
	}

	//Calculating and printing five warmest
	echo '<br><b>Five coolest high temperatures are:</b><br>';
	for ($i = 0; $i < 5; $i++) {
		echo "$array[$i]&#8457; temperature<br>";
	}
	echo '<br>';
	echo '</div>';
	?>
</body>

</html>