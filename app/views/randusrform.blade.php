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
	
	<!-- number of users -->
	{{ Form::label("num_u", "How many users?"); }}
	{{ Form::text("num_u"); }}<br>
	
	<!-- address desired? -->
	{{ Form::label("address", "Would you like to include an address?"); }}
	{{ Form::checkbox("address", "on"); }}
	<br>
	{{ Form::submit("Generate"); }}


@stop
	