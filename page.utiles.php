<?php
/**
 * Created by PhpStorm.
 * User: percevase
 * Date: 27/11/18
 * Time: 22:30
 */
function start_page () {
	echo '<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
		<title>Tengjordin</title>
	</head>
	<body>
		<nav>
			<li>
				<ul><a href="index.php">Accueil</a></ul>
				<ul><a href="univers.php">Univers</a></ul>
				<ul><a href="rpg.php">JDR</a></ul>
			</li>
		</nav>';
}

function end_page () {
	echo '	</body>
</html>';
}