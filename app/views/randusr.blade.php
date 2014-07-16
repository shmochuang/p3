@extends('randusrform')


@section('head')

@stop

@section('title')
	Random User Generator
@stop




@section('content')
	
	<h1>Random User Generator</h1>
	

	<div>
		<?php 
			$faker = Faker\Factory::create(); 
			for ($i=0; $i < $_POST['num_u']; $i++) {
				echo "<li>".$faker->name."</li>";
			}
		?>
	</div>

@stop