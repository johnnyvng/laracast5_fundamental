@extends('app')

@section('content')
	<h2>Write an Article</h2>

	<hr/>
	<!-- 
	We can use the hmtl to write form like this but instead we can use laravel 5 to write form
	<form></form> -->

	{!! Form::open(['url' => 'articles']) !!}
		

		<!-- Title Form Input -->
		<div class="form-group">
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>

		<!-- Body Form Input -->
		<div class="form-group">
			{!! Form::label('body', 'Body:') !!}
			{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
		</div>

		<!-- Add Article Form Input -->
		<div class="form-group">
			{!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
		</div>

		
	{!! Form::close() !!}
	



@stop