<legend>
	Filter Todos
	<div class="btn-group pull-right" role="group" aria-label="...">
		<a href="{{$app->urlFor('todos.index')}}" type="button" class="btn btn-default btn-xs">All</a>
		<a href="{{$app->urlFor('todos.index', ['filter' => 'new'])}}" type="button" class="btn btn-default btn-xs">New</a>
		<a href="{{$app->urlFor('todos.index', ['filter' => 'working'])}}" type="button" class="btn btn-default btn-xs">Working</a>
		<a href="{{$app->urlFor('todos.index', ['filter' => 'done'])}}" type="button" class="btn btn-default btn-xs">Done</a>
		<a href="{{$app->urlFor('todos.index', ['filter' => 'archived'])}}" type="button" class="btn btn-default btn-xs">Archived</a>
	</div>
</legend>