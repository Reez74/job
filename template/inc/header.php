<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title><?php echo SITE_TITLE; ?></title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		  <a class="navbar-brand" href="index.php"><?php echo SITE_TITLE; ?></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item">
				<a class="nav-link" href="index.php">Начало</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="create.php">Добавить вакансию</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="reg.php">Регистрация</a>
			  </li>
			</ul>
		  </div>
		</nav>
		<?php displayMessage(); ?>
