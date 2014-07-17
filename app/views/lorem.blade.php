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
	
		@if(is_numeric($_POST["num_p"]))
	
			@if ($_POST["hipster"] != "on")
				
				<?php 
				
					$generator = new Badcow\LoremIpsum\Generator();
					$paragraphs = $generator->getParagraphs($_POST['num_p']);
		
				?>
				
				{{ implode('<p>', $paragraphs); }}
				
			@else
			
				<!-- code snipit borrowed from Seth Lilly - Hipster Ipsum for Coda (link in readme.md)-->
				<?php 
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, "http://hipsterjesus.com/api/?type=hipster-centric&paras=".$_POST['num_p']);
					curl_setopt($ch, CURLOPT_HEADER, 0);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					$res = curl_exec($ch);
					error_log($res,0);
					curl_close($ch);
					
					$ret = json_decode($res);
				?>
				
				{{ $ret->{'text'}; }} 
				
			@endif
		
		@else
			{{ "Please input a number."."<br>" }}
			{{ "<a href='/lorem' alt='lorem ipsum form page'>Return to form</a>" }} 
		@endif
		
	</div>

@stop