@extends('_master')


@section('head')
@stop

@section('title')
	Random User Generator
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
	{{ Form::hidden("address", false); }}
	{{ Form::checkbox("address", "on",  true); }}
	<br>
	{{ Form::submit("Generate"); }}


@stop
	