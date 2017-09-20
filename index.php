<?php 

	if(isset($_GET['p'])){
		
		$p = $_GET['p'];
	
	} else {
		
		$p = 'accueil';
		
	}


	ob_start();

	if($p === 'acceuil'){
		include('page/acceuil.php');
	}

	if($p === 'listeArt'){
		include('page/listeArt.php');
	}

	$content = ob_get_clean();
	include('page/template/default.php');

?>