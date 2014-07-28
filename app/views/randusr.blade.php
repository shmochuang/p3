@extends('randusrform')


@section('head')

@stop

@section('title')
	Random User Generator
@stop




@section('content')
	
	<h1>Random User Generator</h1>
	

	<div class="generated users_out">
	
		@if(is_numeric($_POST["num_u"]))
		
			<!-- create users -->
			<?php $faker = Faker\Factory::create(); ?>
				
				<!-- loop thorugh users -->
				@for($i=0; $i < $_POST['num_u']; $i++)
				
					<!-- echo name -->
					{{ "<li>"."Name: ".$faker->name."</li>"; }}
	
					<!-- if password == on, generate password and echo -->
					@if ($_POST['password'] == 'on') 
					<?php $password = (array) Pw::gen($_POST["password"]) ; ?>
					{{ "<li>"."Password: ".implode($password)."</li>"; }}
					@endif
					
					<!-- if address == on, echo address -->
					@if ($_POST['address'] == 'on') 
					{{ "<li>"."Address: ".$faker->address."</li>"; }}
					@endif
					
					
					<!-- if text == on, echo text -->
					@if ($_POST['text'] == 'on')
					{{ "<li>"."Text: ".$faker->text."</li>"; }}
					@endif
					
					<!-- only echo breaks if more users to come -->
					@if ($i < $_POST['num_u'] - 1)
					{{ "<br><br>"; }}
					@endif
					
					
				@endfor
		@else
			{{ "Please input a number."."<br>" }}
			{{ "<a href='/randusr' alt='random user form page'>Return to form</a>" }} 
		@endif
		
	</div>

@stop