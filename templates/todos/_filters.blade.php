<legend>
	Filter Todos
	<div class="btn-group pull-right" role="group" aria-label="filters">
		@foreach($totals as $status => $count)
			@include('todos.filter._button', compact('status', 'count'))
		@endforeach
	</div>
</legend>