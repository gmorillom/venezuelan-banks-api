<?php
	use Slim\Factory\AppFactory as Slim;

	//Clases requeridas
	require_once("classes/Bank.php");
	require_once("classes/CleanInput.php");
	require_once("classes/Middlewares/Banks.php");
	require_once("classes/Middlewares/NewBank.php");
	require_once("classes/Middlewares/Changes.php");
	require_once("classes/Middlewares/Unnecesary.php");
	require_once("classes/Middlewares/Home.php");

	$slim = Slim::create();
<<<<<<< HEAD
	//$slim->setBasePath("/API_LISTADO_DE_BANCOS"); Cuando inicio la API desde localhost
=======
	//$slim->setBasePath("/venezuelan-banks-api");
>>>>>>> b267105185d74ea6627e746223bf00bada059616
	$slim->addRoutingMiddleware();

	//Documentacion de la api
	$slim->get("/",Home::class);

	
	$slim->get("/api/banca[/{id:[0-9]}]",Banks::class); //Recupero todos los bancos o solo uno
	$slim->post("/api/banco/nuevo",NewBank::class); //Inserto un nuevo banco
	$slim->put("/api/banco/cambiazo",Changes::class); //Actualizo un banco
	$slim->delete("/api/banco/innecesario/{id}",Unnecesary::class); //Elimino un banco
	$slim->addErrorMiddleware(true,true,true);

	$slim->run();
	
	//Para acceder a la api con peticiones que no sean GET utilizo el comando que se puede ejecutar desde la mayoria de sistemas basados en Unix: curl -v -X METHOD URI y si fuera para insertar un nuevo elemento añado -d data donde data puede ser enviada en formato json o cadena
?>
