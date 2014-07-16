@extends('_master')


@section('head')
@stop

@section('title')
	Lorem Ipsum Generator
@stop

@section('content')

<!-- links -->

	<h1>Random User Generator</h1>


	<!-- form -->	
	{{ Form::open(); }}
	{{ Form::label("num_u", "How many users?"); }}
	{{ Form::text("num_u"); }}<br><br>
	{{ Form::submit("Generate"); }}


@stop
	