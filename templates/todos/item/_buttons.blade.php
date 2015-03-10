@if($status == 'new')
	<a href="{{$app->urlFor('todo.update', ['id' => $todo->id, 'status' => 'working'])}}" role="button" class="btn btn-default btn-xs" title="Set as working">
		<span class="glyphicon glyphicon-cog"></span>
	</a>
@else
	<a href="{{$app->urlFor('todo.update', ['id' => $todo->id, 'status' => 'new'])}}" role="button" class="btn btn-default btn-xs" title="Set as new">
		<span class="glyphicon glyphicon-refresh"></span>
	</a>
@endif
@if($status == 'working')
	<a href="/todos/{{$todo->id}}/update/status/done" role="button" class="btn btn-default btn-xs" title="Set as Done">
		<span class="glyphicon glyphicon-ok"></span>
	</a>
@endif
@if($status == 'done')
	<a href="{{$app->urlFor('todo.update', ['id' => $todo->id, 'status' => 'archived'])}}" role="button" class="btn btn-default btn-xs" title="Save it">
		<span class="glyphicon glyphicon-save"></span>
	</a>
@endif