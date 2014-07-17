@extends('_master')


@section('title')
	Developer's Best Friend
@stop

@section('content')

	<h1>The Developer's Best friend</h1>

	<!-- Description of app -->
	<div class="lorem">
		<h2><a href="/lorem" alt="lorem ipsum generator">Lorem Ipsum Generator</a></h2>
		<p>
			This application allows you to generate filler text for you own projects. It also gives you the option of using hipster vocabulary to spice up your filler text.
		</p>
	</div>
	
	<div class="randusr">
		<h2><a href="/randusr" alt="random user generator">Random User Generator</a></h2>
		<p>
			This application allows you to generate a number of fake users to test your own applications. It also gives you the option to generate users with addresses and filler text of their own.
		</p>
	</div>


@stop