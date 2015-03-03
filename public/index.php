<?php
	# Include the vendors autoload
	require("../vendor/autoload.php");

	# Configures Idiorm ORM to use SQLite
	ORM::configure('sqlite:../app.sqlite');
	//ORM::configure('return_result_sets', true);


	# instantiates a new Slim Application
	$app = new \Slim\Slim(array(
		#Adds application settings
		'view' => new \Slim\Views\Blade(),
		'templates.path' => '../templates',
	));

	#setup templates compiled cache
	$view = $app->view();
	$view->parserOptions = array(
		'debug' => true,
		'cache' => "../html_cache"
	);

	# defines a route for the GET method
	$app->get("/", function() use ($app){
		$todos = ORM::forTable('todos')->findMany();
		$app->render('todos.index', compact('todos'));
	});

	# defines a route for the GET method
	$app->get("/:id", function($id) use ($app){
		$todo = ORM::forTable('todos')->findOne($id);
		$app->render('todos.show', compact('todo'));
	});

	# Actually runs the application
	$app->run();