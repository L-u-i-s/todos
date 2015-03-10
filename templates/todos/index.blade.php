@extends('layouts.main')

@section('content')
	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<h1 class="text-center">Todo App List</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				@include('todos._form')
			</div>
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						@include('todos._filters')
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<ul class="list-group">
							@if(!empty($todos))
								@foreach($todos as $todo)
									@include('todos._item', compact('todo'))
								@endforeach
							@elseif($filter == 'all')
								<p>Your todos list is empty, create a new todo item with the side form.</p>
							@elseif($filter == 'new')
								<p>You are haven't created any new todo recently.</p>
							@elseif($filter == 'working')
								<p>You are not working in any todo right now.</p>
							@elseif($filter == 'done')
								<p>You haven't finished any todo recently.</p>
							@elseif($filter == 'arcived')
								<p>You haven't archived any todo recently.</p>
							@endif
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				@include('widgets.social', compact('todo'))
			</div>
		</div>
	</div>
@stop