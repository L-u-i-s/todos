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
		@include('todos.item._buttons', [ 'status' => $todo->value])
	</span>
</li>