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

	# defines a route for the POST method to create a todo item
	$app->post("/todos", function() use ($app){
		# We get all the POST method variables
		$postVars = $app->request->post();
		# We create a new todo resource
		$todo = ORM::forTable('todos')->create();
		# We set the passed attributes
		$todo->task = ucfirst($postVars['task']);
		# We save the resource into the database
		$todo->save();
		//var_dump(ORM::get_query_log());
		$app->redirect("/todos/new");
	})
	->conditions(['status' => '(new|working|done|archived)'])
	->name('todo.create');

	# defines a route for the GET method
	$app->get("/todos(/:filter)", function($filter = 'all') use ($app){
		$todos = ORM::forTable('todos')
			->select(['todos.id', 'todos.task', 'lookup.value'])
			->join('lookup', ['todos.status', '=', 'lookup.code'])
			->order_by_asc('todos.id');

		if($filter == 'all')
			$todos->where_not_equal('lookup.value', 'archived');
		else
			$todos->where('lookup.value', $filter);

		$todos = $todos->findMany();

		$app->render('todos.index', compact('todos', 'app', 'filter'));
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
		$lookup_status = ORM::forTable('lookup')->where(['type' => 'todo.status', 'value' => $status])->findOne();
		# Then we get the corresponding todo item for the id
		$todo = ORM::forTable('todos')->findOne($id);
		# We update its code value		//$todo->status = $status->code;
		$todo->set('status', $lookup_status->code);
		# We save it into the database
		$todo->save();
		//var_dump(ORM::get_query_log());
		$app->redirect("/todos/".$status);
	})
	->conditions(['status' => '(new|working|done|archived)'])
	->name('todo.update');

	# Actually runs the application
	$app->run();