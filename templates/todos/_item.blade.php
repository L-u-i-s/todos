<li class="list-group-item clearfix">
	@if($todo->value == 'new')
		<span class="label label-info">new</span>
	@elseif($todo->value == 'working')
		<span class="label label-warning">working</span>
	@elseif($todo->value == 'done')
		<span class="label label-success">done</span>
	@elseif($todo->value == 'archived')
		<span class="label label-default">archived</span>
	@endif
	<span>{{$todo->task}}</span>
	<span class="pull-right">
		@if($todo->value == 'working')
			<a href="/todos/{{$todo->id}}/update/status/done" role="button" class="btn btn-default btn-xs" title="Set as Done">
				<span class="glyphicon glyphicon-ok"></span>
			</a>
		@endif
		@if($todo->value == 'done')
			<a href="{{$app->urlFor('todo.update', ['id' => $todo->id, 'status' => 'archived'])}}" role="button" class="btn btn-default btn-xs" title="Save it">
				<span class="glyphicon glyphicon-save"></span>
			</a>
		@endif
		@if($todo->value == 'new')
			<a href="{{$app->urlFor('todo.update', ['id' => $todo->id, 'status' => 'working'])}}" role="button" class="btn btn-default btn-xs" title="Set as working">
				<span class="glyphicon glyphicon-cog"></span>
			</a>
		@endif
	</span>
</li>