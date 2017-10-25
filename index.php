<?php 

	$cities = ['Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];
	sort($cities);
	
	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Oefening 12 - Tjorven Dewulf</title>
	</head>
	<body>


	<ol>

		<?php foreach ( $cities as $city ): ?>
				<li><?=strtoupper($city)?></li>
		<?php endforeach; ?>

	</ol>

	
</body>
</html>