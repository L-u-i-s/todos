<?php
	# Include the vendors autoload
	require("../vendor/autoload.php");

	# instantiates a new Slim Application
	$app = new \Slim\Slim();

	# defines a route for the GET method
	$app->get("/", function(){
		$view = require("index.html");
		echo $view;
	});

	# Actually runs the application
	$app->run();