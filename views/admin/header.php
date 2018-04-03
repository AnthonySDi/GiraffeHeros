<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Giraffe Heroes</title>

	<!--Remy Sharp Shim -->
	<!--[if lte IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" >
	</script>
	<![endif]-->
	<link href="<?php echo base_url(); ?>public/css/reset.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>public/css/fontawesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>public/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
	<link href="<?php echo base_url(); ?>public/css/styles.css" type="text/css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<!-- font -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

</head>
<body>
<div id="wrapper">
	<header>
		<div id="head">
			<img src="<?php echo base_url(); ?>public/images/logo.png" alt="logo">
		</div>
	</header>

	<nav>
		<ul class="AdminMenu">
			<li>
				<a href="<?php echo base_url(); ?>register">
					Add Admin
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>addGiraffe">
					Add Giraffe
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>editGiraffe">
					Edit Giraffe
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>logout">
					logout
				</a>
			</li>
		</ul>
	</nav>