<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hello World - Colourful Grid NOW CHANGED woo</title>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			overflow: hidden;
		}

		.grid-container {
			display: grid;
			grid-template-columns: repeat(10, 1fr);
			grid-template-rows: repeat(10, 1fr);
			width: 100vw;
			height: 100vh;
			position: relative;
		}

		.grid-item {
			width: 100%;
			height: 100%;
		}

		.hello-world {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-size: 4rem;
			font-weight: bold;
			color: white;
			text-shadow:
				3px 3px 6px rgba(0, 0, 0, 0.8),
				-1px -1px 2px rgba(0, 0, 0, 0.5);
			font-family: 'Arial', sans-serif;
			z-index: 10;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="grid-container">
		<?php
		// Create a 10x10 grid with rainbow colors
		for ($row = 0; $row < 10; $row++) {
			for ($col = 0; $col < 10; $col++) {
				// Calculate hue based on position for a rainbow effect
				$hue = (($row * 10 + $col) * 3.6) % 360;
				$saturation = 70 + ($row * 3); // Varying saturation
				$lightness = 45 + ($col * 2);  // Varying lightness
				echo "<div class='grid-item' style='background-color: hsl($hue, {$saturation}%, {$lightness}%);'></div>";
			}
		}
		?>
		<div class="hello-world">Hello World!</div>
	</div>
</body>
</html>
