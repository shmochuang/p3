@extends('_master')


@section('head')
@stop

@section('title')
	Lorem Ipsum Generator
@stop

@section('content')

	<h1>Lorem Ipsum Generator</h1>


	<!-- form -->	
	{{ Form::open(); }}
	{{ Form::label("num_p", "How many paragraphs?"); }}
	{{ Form::text("num_p"); }}<br><br>
	{{ Form::submit("Generate"); }}


@stop
	