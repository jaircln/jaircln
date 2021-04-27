<?php
header('Content-Type: application/json');

$pdo=new PDO("mysql:dbname=basededatos;host=127.0.0.1","jla","123");

switch($_GET['q']){
		
		case 1:
		    $statement=$pdo->prepare("SELECT bancoppel,purecloud FROM medidor ORDER BY id DESC LIMIT 0,1");
			$statement->execute();
			$results=$statement->fetchAll(PDO::FETCH_ASSOC);
			$json=json_encode($results);
			echo $json;
		break; 
		// Buscar Todos los datos
		default:
			
			$statement=$pdo->prepare("SELECT purecloud,bancoppel FROM medidor ORDER BY id ASC");
			$statement->execute();
			$results=$statement->fetchAll(PDO::FETCH_ASSOC);
			$json=json_encode($results);
			echo $json;
		break;
}
?>