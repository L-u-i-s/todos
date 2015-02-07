<?php
	# Include the vendors autoload
	require("../vendor/autoload.php");

	# instantiates a new Slim Application
	$app = new \Slim\Slim();

	# defines a route for the GET method
	$app->get("/", function(){
		echo "Hello World";
	});

	# Actually runs the application
	$app->run();