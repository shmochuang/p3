@extends('_master')


@section('head')
	// stylesheet
@stop

@section('title')
	Lorem Ipsum Generator
@stop

@section('content')

	<h1>Lorem Ipsum Generator</h1>
		
	<!-- generate content -->
	<section class="generated">
	
		<?php $generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($number);
		echo implode('<p>', $paragraphs);?>
		
	</section>

@stop