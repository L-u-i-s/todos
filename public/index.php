<?php
	# Include the vendors autoload
	require("../vendor/autoload.php");

	# Configures Idiorm ORM to use SQLite
	ORM::configure('sqlite:../app.sqlite.db');
	ORM::configure('logging', true);
	//ORM::configure('return_result_sets', true);


	# Instantiates a new Slim Application
	$app = new \Slim\Slim([
		#Adds application settings
		'view' => new \Slim\Views\Blade(),
		'templates.path' => '../templates',
	]);

	# Setup templates compiled cache
	$view = $app->view();
	$view->parserOptions = [
		'debug' => true,
		'cache' => "../html_cache"
	];

	# Defines a Route for the POST method to create a new todo item
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

	# Defines a Route for the GET method that fetchs a list of filtered items 
	$app->get("/todos(/:filter)", function($filter = 'all') use ($app){
		# We count every item for the diferent statuses
		$totals['all'] = ORM::forTable('todos')
			->join('lookup', ['todos.status', '=', 'lookup.code'])
			->where('lookup.type', 'todo.status')
			->where_not_equal('lookup.value', 'archived')
			->count();
		$totals['new'] = ORM::forTable('todos')->join('lookup', ['todos.status', '=', 'lookup.code'])->where('lookup.value', 'new')->count('status');
		$totals['working'] = ORM::forTable('todos')->join('lookup', ['todos.status', '=', 'lookup.code'])->where('lookup.value', 'working')->count('status');
		$totals['done'] = ORM::forTable('todos')->join('lookup', ['todos.status', '=', 'lookup.code'])->where('lookup.value', 'done')->count('status');
		$totals['archived'] = ORM::forTable('todos')->join('lookup', ['todos.status', '=', 'lookup.code'])->where('lookup.value', 'archived')->count('status');
		
		# We get select the columns we need and also get the status translations
		$todos = ORM::forTable('todos')
			->select(['todos.id', 'todos.task', 'lookup.value'])
			->join('lookup', ['todos.status', '=', 'lookup.code'])
			->where('lookup.type', 'todo.status')
			->order_by_asc('todos.id');

		# We filter the items that are going to be retrived by their status
		if($filter == 'all')
			$todos->where_not_equal('lookup.value', 'archived');
		else
			$todos->where('lookup.value', $filter);

		# We actually get the records
		$todos = $todos->findMany();

		# We render the corresponding view and pass the needed data
		$app->render('todos.index', compact('todos', 'app', 'filter', 'totals'));
		//var_dump(ORM::get_query_log());
	})
	# We set a filter condition; the route will only responde to these filters
	->conditions(['filter' => '(all|new|working|done|archived)'])
	# We name our route to by able to create URLs easily
	->name('todos.index');

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
		$app->redirect("/todos/$status");
	})
	# We set a filter condition; the route will only responde to these filters
	->conditions(['status' => '(new|working|done|archived)'])
	# We name our route to by able to create URLs easily
	->name('todo.update');

	# Actually runs the application
	$app->run();