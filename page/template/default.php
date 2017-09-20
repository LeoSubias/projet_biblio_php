<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>templates</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Inclus la page navbar.php pour l'afficher sur toutes les pages  -->
<?php include('navbar.php'); ?>

<!-- Inclus le contenu de la page ciblé via la navbar avec $content -->
<?= $content ?>

<!-- Inclus la page footer.php pour l'afficher sur toutes les pages -->
<?php include('footer.php'); ?>

<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="page/js/app.js"></script>
</body>
</html>
