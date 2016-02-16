@extends('app')

@section('content')
	<h1>Articles</h1>

	<hr/>

	@foreach ($articles as $article)
		<article>
			<!-- To link the article on index page, we can do as follow: -->
			<!-- Simple view of Articles -->
			<!-- <h2>
				<a href="#"> {!! $article->title !!} </a>
			</h2> -->
			

			<h2> 
				<a href="/articles/ {!! $article->id !!}"> 
				{!! $article->title !!}</a>
			</h2>
 		

<!-- 		OR	<h2> 
				<a href="{{ 
					action(' ArticlesController@show', [$articles->id]) 
					}}"> </a>
				{!! $article->title !!}
			</h2> -->


<!-- 			<h2> 
				<a href="{{ url('/articles', $article->id) }}"> 
				{!! $article->title !!} </a>
			</h2> -->
			



			<div class="body"> {!! $article->body !!}</div>
		</article>
	@endforeach
@stop