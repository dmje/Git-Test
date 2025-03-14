<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rainbow Grid</title>
	<style>
		body{
			margin:0px;
			padding:0px;
		}
	
		.grid-container {
			display: grid;
			grid-template-columns: repeat(100, 1fr);
			width: 100vw;
			height: 100vw; /* Ensures a square grid */
			margin: 0;
			padding: 0;
		}
		.grid-item {
			width: 100%;
			padding-bottom: 100%; /* Maintain square cells */
			margin: 0;
		}
	</style>
</head>
<body>
	<div class="grid-container">
		<?php
		// Loop through 100 rows and 100 columns
		for ($row = 0; $row < 100; $row++) {
			for ($col = 0; $col < 100; $col++) {
				// Calculate hue based on position in the grid
				$hue = ($row + $col) % 360; // Full rainbow cycle across the grid
				$saturation = 80; // 80% saturation
				$lightness = 50;  // 50% lightness
				echo "<div class='grid-item' style='background-color: hsl($hue, {$saturation}%, {$lightness}%);'></div>";
			}
		}
		?>
	</div>
</body>
</html>
