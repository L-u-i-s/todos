<form action="{{$app->urlFor('todo.create')}}" method="POST" role="form">
	<legend>Add new</legend>

	<div class="form-group">
		<label for="">New ToDo Item</label>
		<input type="text" class="form-control" id="todo_task" name="task" placeholder="New Task">
	</div>

	<button type="submit" class="btn btn-primary pull-right">Submit Task</button>
</form>