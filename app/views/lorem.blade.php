@extends('loremform')


@section('head')
	
@stop

@section('title')
	Lorem Ipsum Generator
@stop

@section('content')

	<h1>Lorem Ipsum Generator</h1>
	
		
	<!-- generate content -->
	<div class="generated">
	
		<?php 
		
			$generator = new Badcow\LoremIpsum\Generator();
			$paragraphs = $generator->getParagraphs($_POST['num_p']);
			echo implode('<p>', $paragraphs);
		?>
		
	</div>

@stop