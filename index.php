<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hello World Page</title>
	<style>
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			line-height: 1.6;
			max-width: 800px;
			margin: 0 auto;
			padding: 2rem;
			background-color: #f5f5f5;
			color: #333;
		}

		h1 {
			color: #2c3e50;
			border-bottom: 2px solid #3498db;
			padding-bottom: 0.5rem;
			margin-bottom: 2rem;
		}

		p {
			background-color: white;
			padding: 1rem;
			border-radius: 5px;
			box-shadow: 0 2px 4px rgba(0,0,0,0.1);
			margin-bottom: 1rem;
		}

		@media (max-width: 600px) {
			body {
				padding: 1rem;
			}
		}
	</style>
</head>
<body>
	<h1>Hello world</h1>
	
	<p>It is...<?php echo echo date('jS F Y');?></p>

	<p>Here we go again.</p>

	<p>So the question is whether this auto deploys? Or if I need to kick it off...?</p>

	<p>Ok, so that's cool, I did nada and it still deployed...</p>
</body>
</html>
