<?php
	# Include the vendors autoload
	require("../vendor/autoload.php");

	# Configures Idiorm ORM to use SQLite
	ORM::configure('sqlite:../app.sqlite.db');
	ORM::configure('logging', true);
	//ORM::configure('return_result_sets', true);


	# instantiates a new Slim Application
	$app = new \Slim\Slim([
		#Adds application settings
		'view' => new \Slim\Views\Blade(),
		'templates.path' => '../templates',
	]);

	#setup templates compiled cache
	$view = $app->view();
	$view->parserOptions = [
		'debug' => true,
		'cache' => "../html_cache"
	];

	# defines a route for the GET method
	$app->get("/todos(/:filter)", function($filter = 'all') use ($app){
		$todos = ORM::forTable('todos')
			->select(['todos.id', 'todos.task', 'lookup.value'])
			->join('lookup', ['todos.status', '=', 'lookup.code'])
			->order_by_desc('todos.id')->findMany();

		$app->render('todos.index', compact('todos', 'app'));
		//var_dump(ORM::get_query_log());
	})->name('todos.index');

	# defines a route for the GET method
	/*$app->get("/todos/:id", function($id) use ($app){
		$todo = ORM::forTable('todos')->findOne($id);
		$app->render('todos.show', compact('todo'));
	});*/

	# defines a route for the GET method
	$app->get("/todos/:id/update/status/:status", function($id, $status) use ($app){
		# We get the status code firts the status code they passed
		$status = ORM::forTable('lookup')->where(['type' => 'todo.status', 'value' => $status])->findOne();
		# Then we get the corresponding todo item for the id
		$todo = ORM::forTable('todos')->findOne($id);
		# We update its code value		//$todo->status = $status->code;
		$todo->set('status', $status->code);
		# We save it into the database
		$todo->save();
		//var_dump(ORM::get_query_log());
		$app->redirect('/todos');
	})
	->conditions(['status' => '(new|working|done|archived)'])
	->name('todo.update');

	# Actually runs the application
	$app->run();