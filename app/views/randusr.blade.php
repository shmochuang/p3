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
			
			// loop thorugh users
			for ($i=0; $i < $_POST['num_u']; $i++) {
			
				// echo name
				echo "<li>".$faker->name."</li>";
				
				
				// if address == on, echo address
				if ($_POST['address'] == 'on') {
					echo "<li>".$faker->address."</li>";
				}
				
			}
		?>
	</div>

@stop