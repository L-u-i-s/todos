<a href="{{$app->urlFor('todos.index', ['filter' => $status])}}" type="button" class="btn btn-default btn-xs @if($status == $filter) active @endif" aria-pressed="true">
	{{ucfirst($status)}}
	<span class="badge">{{$count}}</span>
</a>