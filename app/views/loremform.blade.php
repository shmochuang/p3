@extends('_master')


@section('head')
@stop

@section('title')
	Lorem Ipsum Generator
@stop

@section('content')

<!-- links -->

	<h1>Lorem Ipsum Generator</h1>


	<!-- form -->	
	{{ Form::open(); }}
	{{ Form::label("num_p", "How many paragraphs?"); }}
	{{ Form::text("num_p"); }}
	<br><br>
	
	{{ Form::label("hipster", "Use Hipster Words?"); }}
	{{ Form::hidden("hipster", false); }} <!-- included to handle $_POST if box is unchecked -->
	{{ Form::checkbox("hipster", "on",  true); }}
	<br><br>
	
	
	{{ Form::submit("Generate"); }}


@stop
	