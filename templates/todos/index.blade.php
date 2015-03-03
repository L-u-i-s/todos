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
				<ul class="list-group">
					@foreach($todos as $todo)
						@include('todos._item', compact('todo'))
					@endforeach
				</ul>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				@include('widgets.social', compact('todo'))
			</div>
		</div>
	</div>
@stop