@extends('layouts.main')

@section('content')
	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<h1 class="text-center">Todo App Item</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<ul class="list-group">
					@include('index._item', compact('todo'))
				</ul>
			</div>
		</div>
	</div>
@stop