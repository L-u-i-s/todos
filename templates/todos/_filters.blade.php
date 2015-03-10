<legend>
	Filter Todos
	<div class="btn-group pull-right" role="group" aria-label="filters">
		<a href="{{$app->urlFor('todos.index')}}" type="button" class="btn btn-default btn-xs @if($filter == 'all') active @endif" aria-pressed="true">
			All
			<span class="badge">{{$totals['all']}}</span>
		</a>
		<a href="{{$app->urlFor('todos.index', ['filter' => 'new'])}}" type="button" class="btn btn-default btn-xs @if($filter == 'new') active @endif" aria-pressed="true">
			New
			<span class="badge">{{$totals['new']}}</span>
		</a>
		<a href="{{$app->urlFor('todos.index', ['filter' => 'working'])}}" type="button" class="btn btn-default btn-xs @if($filter == 'working') active @endif" aria-pressed="true">
			Working
			<span class="badge">{{$totals['working']}}</span>
		</a>
		<a href="{{$app->urlFor('todos.index', ['filter' => 'done'])}}" type="button" class="btn btn-default btn-xs @if($filter == 'done') active @endif" aria-pressed="true">
			Done
			<span class="badge">{{$totals['done']}}</span>
		</a>
		<a href="{{$app->urlFor('todos.index', ['filter' => 'archived'])}}" type="button" class="btn btn-default btn-xs @if($filter == 'archived') active @endif" aria-pressed="true">
			Archived
			<span class="badge">{{$totals['archived']}}</span>
		</a>
	</div>
</legend>