@extends('_master')



@section('title')
	Random User Generator
@stop



@section('content')

<!-- links -->

	<h1>Random User Generator</h1>


	<!-- form -->	
	{{ Form::open(); }}
	
	
	<!-- number of users -->
	{{ Form::label("num_u", "Number of Users"); }}
	{{ Form::text("num_u"); }}
	<br>
	
	
	<!-- address desired? -->
	{{ Form::label("address", "Include Adress"); }}
	{{ Form::hidden("address", false); }} <!-- included to handle $_POST if box is unchecked -->
	{{ Form::checkbox("address", "on",  true); }}
	<br>
	
	
	<!-- text desired? -->
	{{ Form::label("text", "Include Text"); }}
	{{ Form::hidden("text", false); }} <!-- included to handle $_POST if box is unchecked -->
	{{ Form::checkbox("text", "on",  true); }}
	<br>
	
	
	{{ Form::submit("Generate"); }}


@stop
	