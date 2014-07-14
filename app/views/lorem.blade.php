@extends('_master')


@section('head')
	// stylesheet
@stop

@section('title')
	Lorem Ipsum Generator
@stop

@section('content')

	<h1>Lorem Ipsum Generator</h1>
	
	<!-- // form -->
	
	<!-- ask how many paragraphs -->
	
	<p>How many paragraphs would you like to generate?</p>
	<form method="POST">
	
		Number of paragraphs: <input type="number" name="para" min="1" max="99"> (1 to 99)
		<br>
		<input type="submit" value="Generate">
	
	</form>
	
	<!-- generate content -->
	<section class="generated">
	
		<p>paragraphs to be generated here*</p>
		
	</section>

@stop